<x-layout>
    <div class="uk-section uk-section-xsmall">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-flex-middle" data-uk-grid>
                <div class="uk-width-expand">
                    <h1 class="uk-margin-remove">
                        {{ $locationName }}
                        <span class="uk-text-small">{{ $stationCode }}</span>
                    </h1>
                </div>
                @if (!isset($error))
                    <div class="uk-width-auto@s">
                        <form class="uk-form uk-margin-remove uk-grid uk-grid-small uk-flex-bottom"
                              data-uk-grid
                              id="searchForm"
                              x-data="{station: '' }"
                              method="post"
                              action="/redirect">
                            <div class="uk-width-auto">
                                <label class="uk-form-label" for="station">Station</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input"
                                           list="stations"
                                           id="station"
                                           name="station"
                                           x-model="station"
                                           hx-get="/stations"
                                           hx-target="#stations"
                                           hx-trigger="keyup[checkUserKeydown.call(this, event)] changed delay:25ms">
                                    <datalist id="stations"></datalist>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <input type="submit" class="uk-button uk-button-primary" value="Go">
                            </div>
                        </form>
                    </div>
                @endif
            </div>

            @if (isset($error))
                <div class="uk-alert uk-alert-danger">
                    {{ $error }}
                </div>
            @endif

            <script>
                function checkUserKeydown(event) {
                    return event instanceof KeyboardEvent
                }
            </script>

            <table class="uk-table uk-table-small uk-table-divider"
                   id="departures"
                   hx-trigger="every 10s"
                   hx-select="#departures"
                   hx-disinherit="hx-select"
                   hx-get="{{ route('station', ['code' => $stationCode]) }}">
                <thead>
                <tr>
                    <th>Due</th>
                    <th>Expected</th>
                    <th>P</th>
                    <th>Destination</th>
                    <th class="uk-visible@s">Service</th>
                    <th class="uk-visible@s">Operator</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($trainServices as $departure)
                    <tr class="{{ ($departure->etd !== 'On time') ? 'uk-text-danger' : '' }}">
                        <td>{{ $departure->std }}</td>
                        <td>{{ $departure->etd }}</td>
                        <td>{{ $departure?->platform ?? '' }}</td>
                        <td>
                            <a hx-boost="true"
                               href="{{ route('station', ['code' => $departure?->destination?->location?->crs ?? 'ERR']) }}">
                                {{ $departure?->destination?->location?->locationName ?? 'Error' }}
                            </a>
                        </td>
                        <td class="uk-text-small uk-visible@s">
                            From
                            <a hx-boost="true"
                               href="{{ route('station', ['code' => $departure->origin->location->crs ?? '']) }}">
                                {{ $departure->origin->location->locationName }}
                            </a>
                        </td>
                        <td class="operator-{{ $departure->operatorCode }} uk-visible@s">
                            {{ $departure->operator }}
                        </td>
                    </tr>
                @endforeach
                @foreach ($busServices as $departure)
                    <tr class="{{ ($departure->etd !== 'On time') ? 'uk-text-danger' : '' }}">
                        <td>{{ $departure->std }}</td>
                        <td>{{ $departure->etd }}</td>
                        <td>{{ $departure?->platform }} (BUS)</td>
                        <td>
                            <a hx-boost="true"
                               href="{{ route('station', ['code' => $departure->destination->location->crs ?? '']) }}">
                                {{ $departure->destination->location->locationName }}
                            </a>
                        </td>
                        <td class="uk-text-small uk-visible@s">
                            From
                            <a hx-boost="true"
                               href="{{ route('station', ['code' => $departure->origin->location->crs ?? '']) }}">
                                {{ $departure->origin->location->locationName }}
                            </a>
                        </td>
                        <td class="operator-{{ $departure->operatorCode }} uk-visible@s">
                            {{ $departure->operator }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @if ($messages)
                @foreach ($messages as $message)
                    <div class="uk-alert uk-alert-danger">
                        {{ is_object($message) ? $message->_ : $message }}
                    </div>

                @endforeach
            @endif
        </div>
    </div>
</x-layout>
