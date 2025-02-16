<x-layout>
    <div class="uk-section uk-section-default uk-section-xsmall uk-margin-remove-top">
        <div class="uk-container">
            <h2>Your feed</h2>

            <hr class="uk-divider-small">

            <ul class="uk-comment-list">
                <li>
                    <article class="uk-comment uk-visible-toggle" tabindex="-1" role="comment">
                        <header class="uk-comment-header uk-position-relative">
                            <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-comment-avatar uk-border-rounded" src="https://baconmockup.com/48/48"
                                         width="48" height="48" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">FearThePie</a>
                                    </h4>
                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12
                                            days ago</a></p>
                                </div>
                            </div>
                            <div class="uk-position-top-right uk-position-small"><a class="uk-link-muted"
                                                                                    href="#">Reply</a></div>
                        </header>
                        <div class="uk-comment-body">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </article>
                    <ul>
                        <li>
                            <article class="uk-comment uk-comment-primary uk-visible-toggle" tabindex="-1"
                                     role="comment">
                                <header class="uk-comment-header uk-position-relative">
                                    <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-comment-avatar uk-border-rounded"
                                                 src="https://baconmockup.com/48/48" width="48" height="48" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                                                             href="#">FearThePie</a>
                                            </h4>
                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset"
                                                                                               href="#">12 days ago</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="uk-position-top-right uk-position-small"><a class="uk-link-muted"
                                                                                            href="#">Reply</a></div>
                                </header>
                                <div class="uk-comment-body">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="uk-comment uk-visible-toggle" tabindex="-1" role="comment">
                                <header class="uk-comment-header uk-position-relative">
                                    <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-comment-avatar uk-border-rounded"
                                                 src="https://baconmockup.com/48/48" width="48" height="48" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                                                             href="#">FearThePie</a>
                                            </h4>
                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset"
                                                                                               href="#">12 days ago</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="uk-position-top-right uk-position-small"><a class="uk-link-muted"
                                                                                            href="#">Reply</a></div>
                                </header>
                                <div class="uk-comment-body">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </article>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="uk-section uk-section-default uk-section-xsmall uk-margin-remove-top">
        <div class="uk-section uk-section-default uk-section-xsmall uk-padding-remove-bottom">
            <div class="uk-container uk-margin-remove-bottom uk-padding-remove-bottom">
                <nav aria-label="Breadcrumb">
                    <ul class="uk-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="uk-disabled"><a>Category</a></li>
                        <li><span aria-current="page">Post</span></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="uk-container">
            <hr class="uk-divider-icon">

            <h1 class="uk-heading-2xlarge uk-margin-remove-top">{{ config('app.name') }}</h1>

            <p class="uk-text-lead">
                {{ config('app.name') }} is the new home for
            </p>

            <article class="uk-article">

                <h1 class="uk-article-title"><a class="uk-link-reset" href="#">Article Title</a></h1>

                <hr class="uk-divider-small">

                <p class="uk-column-1-2@s uk-dropcap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <ul class="uk-list uk-column-1-4">
                    <li>Feed</li>
                    <li>Mail</li>
                    <li>Profile</li>
                    <li>Search</li>
                    <li>Looked at you</li>
                    <li>Friends</li>
                    <li>Events</li>
                </ul>

                <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a
                        href="#">Blog</a>
                </p>

                <hr class="uk-divider-icon uk-margin-medium">

                <div class="uk-grid uk-grid-small uk-child-width-auto uk-flex-middle uk-margin-medium" data-uk-grid>
                    <div>
                        <button class="uk-button uk-button-default">Default</button>
                        <div uk-dropdown="mode: click">
                            <ul class="uk-nav uk-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li class="uk-parent">
                                    <a href="#">Parent</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="#">Sub item</a></li>
                                        <li><a href="#">Sub item</a></li>
                                    </ul>
                                </li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span>
                                        Item</a>
                                </li>
                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>
                                        Item</a>
                                </li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span>
                                        Item</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <button class="uk-button uk-button-primary">Primary</button>
                    </div>
                    <div>
                        <button class="uk-button uk-button-secondary">Secondary</button>
                    </div>
                    <div>
                        <button class="uk-button uk-button-danger">Danger</button>
                    </div>
                    <div>
                        <button class="uk-button uk-button-default" disabled>Disabled</button>
                    </div>
                </div>

                <hr class="uk-margin-medium">

                <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-margin" data-uk-grid>
                    <div>
                        <ul class="uk-list">
                            <li><a href="#">a element</a></li>
                            <li><abbr title="Title text">abbr element</abbr></li>
                            <li><code>code element</code></li>
                            <li>
                                <del>del element</del>
                            </li>
                            <li><dfn title="Title text">dfn element</dfn></li>
                            <li><a href="#" class="uk-link-muted">Link Muted</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="uk-list">
                            <li><em>em element</em></li>
                            <li>
                                <ins>ins element</ins>
                            </li>
                            <li>
                                <mark>mark element</mark>
                            </li>
                            <li><q>q <q>inside</q> a q</q></li>
                            <li><strong>strong element</strong></li>
                            <li><a href="#" class="uk-link-reset">Link Reset</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="uk-list">
                            <li class="uk-text-muted">Text Muted</li>
                            <li class="uk-text-emphasis">Text Emphasis</li>
                            <li class="uk-text-primary">Text Primary</li>
                            <li class="uk-text-secondary">Text Secondary</li>
                            <li class="uk-text-success">Text Success</li>
                            <li class="uk-text-warning">Text Warning</li>
                            <li class="uk-text-danger">Text Danger</li>
                            <li class="uk-text-meta">Text Meta</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="uk-list">
                            <li><span class="uk-label">Default</span></li>
                            <li><span class="uk-label uk-label-success">Success</span></li>
                            <li><span class="uk-label uk-label-warning">Warning</span></li>
                            <li><span class="uk-label uk-label-danger">Danger</span></li>
                            <li><a class="uk-badge" href="#">1</a></li>
                            <li>
                                <a class="uk-icon-button" href="#" uk-icon="icon: home"></a>
                                <a class="uk-icon-button" href="#" uk-icon="icon: github"></a>
                                <a class="uk-icon-link" href="#" uk-icon="icon: trash"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <pre class="uk-pre uk-margin-medium"><code>&lt;div class="myclass"&gt;…&lt;div&gt;</code></pre>

                <blockquote class="uk-margin-medium" cite="#">
                    <p>The blockquote element represents content that is quoted from another source, optionally with a
                        citation which must be within a footer or cite element.</p>
                    <footer>Someone famous in <cite><a href="#">Source Title</a></cite></footer>
                </blockquote>

                <div class="uk-grid uk-grid-small" data-uk-grid>
                    <div>
                        <a class="uk-button uk-button-text" href="#">Read more</a>
                    </div>
                    <div>
                        <a class="uk-button uk-button-text" href="#">5 Comments</a>
                    </div>
                    <div>
                        <a class="uk-button uk-button-link" href="#">Button Link</a>
                    </div>
                </div>

            </article>

            <hr class="uk-margin-medium">

            <ul class="uk-comment-list uk-margin-medium">
                <li>
                    <article class="uk-comment uk-visible-toggle" tabindex="-1" role="comment">
                        <header class="uk-comment-header uk-position-relative">
                            <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-comment-avatar uk-border-rounded" src="https://baconmockup.com/50/50"
                                         width="50"
                                         height="50" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                                                     href="#">FearThePie</a></h4>
                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12
                                            days ago</a></p>
                                </div>
                            </div>
                            <div class="uk-position-top-right uk-position-small"><a
                                    class="uk-button uk-button-text" href="#">Reply</a></div>
                        </header>
                        <div class="uk-comment-body">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </article>
                </li>
            </ul>

            <h1 class="uk-heading-2xlarge uk-margin-small">2X-Large</h1>
            <h1 class="uk-heading-xlarge uk-margin-small">X-Large</h1>
            <h1 class="uk-heading-large uk-margin-small">Heading L</h1>
            <h1 class="uk-heading-medium uk-margin-small">Heading M</h1>
            <h1 class="uk-heading-small uk-margin-small">Heading S</h1>

            <h1 class="uk-margin-small">Heading H1</h1>
            <h2 class="uk-margin-small">Heading H2</h2>
            <h3 class="uk-margin-small">Heading H3</h3>
            <h4 class="uk-margin-small">Heading H4</h4>
            <h5 class="uk-margin-small">Heading H5</h5>
            <h6 class="uk-margin-small">Heading H6</h6>

            <h3 class="uk-heading-divider">Heading Divider</h3>
            <h3 class="uk-heading-bullet">Heading Bullet</h3>
            <h3 class="uk-heading-line"><span>Heading Line</span></h3>

            <div class="uk-overflow-auto uk-margin-medium-top">
                <table class="uk-table uk-table-divider uk-table-small">
                    <thead>
                    <tr>
                        <th>Table Heading</th>
                        <th>Table Heading</th>
                        <th>Table Heading</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Table Data</td>
                        <td>Table Data</td>
                        <td>Table Data</td>
                    </tr>
                    <tr>
                        <td>Table Data</td>
                        <td>Table Data</td>
                        <td>Table Data</td>
                    </tr>
                    <tr>
                        <td>Table Data</td>
                        <td>Table Data</td>
                        <td>Table Data</td>
                    </tr>
                    <tr>
                        <td>Table Data</td>
                        <td>Table Data</td>
                        <td>Table Data</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <form class="uk-form-stacked">

                <div class="uk-margin-small">
                    <label class="uk-form-label" for="form-input-text">Text</label>
                    <input id="form-input-text" class="uk-input" type="text" placeholder="Some text...">
                </div>

                <div class="uk-margin-small">
                    <select class="uk-select" aria-label="Select">
                        <option>Option 01</option>
                        <option>Option 02</option>
                    </select>
                </div>

                <div class="uk-margin-small">
                    <textarea class="uk-textarea" rows="2" placeholder="Some text..." aria-label="Textarea"></textarea>
                </div>

                <div class="uk-grid uk-grid-small uk-child-width-auto" data-uk-grid>
                    <div>
                        <label><input class="uk-radio" type="radio" name="radio"> Radio</label>
                    </div>
                    <div>
                        <label><input class="uk-checkbox" type="checkbox"> Checkbox</label>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1" aria-label="Range">
                </div>

                <div class="uk-margin-small">
                    <label class="uk-form-label" for="form-input-states">States</label>
                    <input id="form-input-states" class="uk-input" type="text" placeholder=":disabled" disabled>

                </div>

                <div class="uk-margin-small">
                    <input class="uk-input uk-form-danger" type="text" placeholder="form-danger"
                           aria-label="form-danger"
                           value="form-danger">
                </div>
                <div class="uk-margin-small">
                    <input class="uk-input uk-form-success" type="text" placeholder="form-success"
                           aria-label="form-success"
                           value="form-success">
                </div>
                <div class="uk-margin-small">
                    <input class="uk-input uk-form-blank" type="text" placeholder="form-blank" aria-label="form-blank">
                </div>

            </form>

            <ul class="uk-nav uk-nav-primary uk-margin-medium">
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
            </ul>

            <ul class="uk-nav uk-nav-secondary uk-margin-medium">
                <li class="uk-active"><a href="#">
                        <div>Active
                            <div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing
                                elit,
                                sed do.
                            </div>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div>Item
                            <div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing
                                elit,
                                sed do.
                            </div>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div>Item
                            <div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing
                                elit,
                                sed do.
                            </div>
                        </div>
                    </a></li>
                <li><a href="#">
                        <div>Item
                            <div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing
                                elit,
                                sed do.
                            </div>
                        </div>
                    </a></li>
            </ul>
        </div>
    </div>

    <div class="uk-section uk-section-default uk-section-small uk-padding-remove-top">
        <div class="uk-container">

            <h1>Card</h1>

            <div class="uk-child-width-1-4@m uk-grid-match" data-uk-grid>
                <div>

                    <div class="uk-card uk-card-small uk-card-default">
                        <div class="uk-card-badge">Hot</div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p uk-margin>
                                <a class="uk-button uk-button-default" href="#">Button</a>
                                <a class="uk-button uk-button-text uk-margin-small-left" href="#">Button</a>
                            </p>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-primary">
                        <div class="uk-card-badge">Hot</div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Primary</h3>
                            <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p uk-margin>
                                <a class="uk-button uk-button-default" href="#">Button</a>
                                <a class="uk-button uk-button-text uk-margin-small-left" href="#">Button</a>
                            </p>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-secondary">
                        <div class="uk-card-badge">Hot</div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Secondary</h3>
                            <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p uk-margin>
                                <a class="uk-button uk-button-default" href="#">Button</a>
                                <a class="uk-button uk-button-text uk-margin-small-left" href="#">Button</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-muted uk-section-small">
        <div class="uk-container">

            <div class="uk-child-width-1-3@m uk-grid-match" data-uk-grid>
                <div>

                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Default</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-primary uk-card-body">
                        <h3 class="uk-card-title">Primary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body">
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-primary uk-section-small uk-preserve-color">
        <div class="uk-container">

            <div class="uk-child-width-1-3@m uk-grid-match" data-uk-grid>
                <div>

                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Default</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-primary uk-card-body">
                        <h3 class="uk-card-title">Primary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body">
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-secondary uk-section-small uk-preserve-color">
        <div class="uk-container">

            <div class="uk-child-width-1-3@m uk-grid-match" data-uk-grid>
                <div>

                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Default</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-primary uk-card-body">
                        <h3 class="uk-card-title">Primary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
                <div>

                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body">
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="uk-section-default ">
        <div class="uk-section uk-section-small uk-background-cover"
             style="background-image: url('https://baconmockup.com/1800/1200');">
            <div class="uk-container">

                <div class="uk-child-width-1-3@m uk-grid-match" data-uk-grid>
                    <div>

                        <div class="uk-card uk-card-small uk-card-default uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore.</p>
                        </div>

                    </div>
                    <div>

                        <div class="uk-card uk-card-small uk-card-primary uk-card-body">
                            <h3 class="uk-card-title">Primary</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore.</p>
                        </div>

                    </div>
                    <div>

                        <div class="uk-card uk-card-small uk-card-secondary uk-card-body">
                            <h3 class="uk-card-title">Secondary</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="uk-container uk-margin-large-top">

        <h2>Media</h2>

        <div class="uk-child-width-1-4@m" data-uk-grid>
            <div>

                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="https://baconmockup.com/1800/1200" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Media Top</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div>
                </div>

            </div>
            <div>

                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Media Bottom</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div>
                    <div class="uk-card-media-bottom">
                        <img src="https://baconmockup.com/1800/1200" width="1800" height="1200" alt="">
                    </div>
                </div>

            </div>
            <div class="uk-width-1-2@m">

                <div class="uk-card uk-card-small uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"
                     data-uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="https://baconmockup.com/1800/1200" alt="" uk-cover>
                        <canvas width="1800" height="1200"></canvas>
                    </div>
                    <div>

                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Media Left</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                        </div>

                    </div>
                </div>

                <div class="uk-card uk-card-small uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"
                     data-uk-grid>
                    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                        <img src="https://baconmockup.com/1800/1200" alt="" uk-cover>
                        <canvas width="1800" height="1200"></canvas>
                    </div>
                    <div>

                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Media Right</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <h2>Header and Footer</h2>

        <div class="uk-child-width-1-4@m" data-uk-grid>
            <div>

                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Title</h3>
                    </div>
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                    <div class="uk-card-footer">
                        <p class="uk-text-meta">Written by <a href="#">Super User</a> on
                            <time datetime="2016-04-01T19:00">April 01, 2016</time>
                            .
                        </p>
                    </div>
                </div>

            </div>
            <div>

                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="https://baconmockup.com/1800/1200" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <p>
                            <a class="uk-button uk-button-primary" href="#">Button</a>
                            <a class="uk-button uk-button-text uk-margin-small-left" href="#">Button</a>
                        </p>
                    </div>
                </div>

            </div>
            <div>

                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Title</h3>
                    </div>
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div>
                    <div class="uk-card-media-bottom">
                        <img src="https://baconmockup.com/1800/1200" width="1800" height="1200" alt="">
                    </div>
                </div>

            </div>
            <div>

                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" src="https://baconmockup.com/50/50" width="50" height="50"
                                     alt="">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
                                <p class="uk-text-meta uk-margin-remove-top">
                                    <time datetime="2016-04-01T19:00">April 01, 2016</time>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <img src="https://baconmockup.com/1800/1200" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="uk-section uk-section-default">

        <div class="uk-container uk-margin-large-top">

            <div class="uk-margin-medium-top" uk-alert>
                <a href="#" class="uk-alert-close" uk-close></a>
                <p>Default</p>
            </div>

            <div class="uk-alert-primary" uk-alert>
                <a href="#" class="uk-alert-close" uk-close></a>
                <p>Primary</p>
            </div>

            <div class="uk-alert-success" uk-alert>
                <a href="#" class="uk-alert-close" uk-close></a>
                <p>Success</p>
            </div>

            <div class="uk-alert-warning" uk-alert>
                <a href="#" class="uk-alert-close" uk-close></a>
                <p>Warning</p>
            </div>

            <div class="uk-alert-danger" uk-alert>
                <a href="#" class="uk-alert-close" uk-close></a>
                <p>Danger</p>
            </div>

            <div class="uk-inline-clip">
                <img src="https://baconmockup.com/360/240" width="360" height="240" alt="">
                <div class="uk-overlay uk-overlay-default uk-position-bottom">
                    <p>Default Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>

            <ul class="uk-list uk-list-bullet uk-margin-medium">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ul>

            <ul class="uk-list uk-list-striped">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ul>

            <ul class="uk-list uk-list-divider uk-margin-medium">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ul>

            <dl class="uk-description-list uk-description-list-divider">
                <dt>Description lists</dt>
                <dd>A description text</dd>
                <dt>Description lists</dt>
                <dd>A description text</dd>
            </dl>

            <ul uk-accordion>
                <li class="uk-open">

                    <a class="uk-accordion-title" href="#">Item 1</a>
                    <div class="uk-accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                </li>
                <li>

                    <a class="uk-accordion-title" href="#">Item 2</a>
                    <div class="uk-accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                </li>
                <li>

                    <a class="uk-accordion-title" href="#">Item 3</a>
                    <div class="uk-accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                </li>
            </ul>
        </div>
    </div>

    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-child-width-1-2@s uk-child-width-1-4@l uk-grid-collapse uk-grid-match" data-uk-grid>
            <div>
                <div class="uk-tile uk-tile-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod
                    tempor.
                </div>
            </div>
            <div>
                <div class="uk-tile uk-tile-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod
                    tempor.
                </div>
            </div>
            <div>
                <div class="uk-tile uk-tile-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod
                    tempor.
                </div>
            </div>
            <div>
                <div class="uk-tile uk-tile-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor.
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-primary">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-secondary">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
