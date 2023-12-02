<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Cards</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Cards</h1>
                <div class="sa-article__subtitle">Bootstrap&#x27;s cards provide a flexible and extensible content container with multiple variants and options.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-content-types">Content Types</a>
                            <ul class="sa-toc__list">
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-body">Body</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-titles-text-and-links">Titles, Text, And Links</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-images">Images</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-list-groups">List groups</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-header-and-footer">Header And Footer</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-kitchen-sink">Kitchen Sink</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-navigation">Navigation</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-image-overlays">Image Overlays</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-horizontal">Horizontal</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-card-styles">Card Styles</a>
                            <ul class="sa-toc__list">
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-background-and-color">Background And Color</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-border">Border</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-card-layout">Card Layout</a>
                            <ul class="sa-toc__list">
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-card-groups">Card Groups</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-grid-cards">Grid Cards</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width to start, so they&#x27;ll naturally fill the full width of its parent element.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card w-20x"><img src="images/card-image-1-320x180.jpg" class="card-img-top h-auto" alt="" width="320" height="180" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;card w-20x&quot;&gt;
    &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;320&quot; height=&quot;180&quot; /&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            Some quick example text to build on the card title and make up the bulk of the
            card&amp;#x27;s content.
        &lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-content-types" class="sa-anchor"><span class="sa-anchor__body">Content Types<a class="sa-anchor__link" href="#article-content-types">#</a></span></h2>
                <p>Cards support a wide variety of content, including images, text, list groups, links, and more. Below are examples of what&#x27;s supported.</p>
                <h3 id="article-body" class="sa-anchor"><span class="sa-anchor__body">Body<a class="sa-anchor__link" href="#article-body">#</a></span></h3>
                <p>The building block of a card is the <code>.card-body</code>. Use it whenever you need a padded section within a card.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body">This is some text within a card body.</div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;&lt;div class=&quot;card-body&quot;&gt;This is some text within a card body.&lt;/div&gt;&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h3 id="article-titles-text-and-links" class="sa-anchor"><span class="sa-anchor__body">Titles, Text, And Links<a class="sa-anchor__link" href="#article-titles-text-and-links">#</a></span></h3>
                <p>Card titles are used by adding <code>.card-title</code> to a <code>&lt;h*&gt;</code> tag. In the same way, links are added and placed next to each other by adding <code>.card-link</code> to an <code>&lt;a&gt;</code> tag.</p>
                <p>Subtitles are used by adding a <code>.card-subtitle</code> to a <code>&lt;h*&gt;</code> tag. If the <code>.card-title</code> and the <code>.card-subtitle</code> items are placed in a <code>.card-body</code> item, the card title and subtitle are aligned nicely.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card w-20x">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-4 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p><a href="#" class="card-link">Card link</a> <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;card w-20x&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;h6 class=&quot;card-subtitle mb-4 text-muted&quot;&gt;Card subtitle&lt;/h6&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            Some quick example text to build on the card title and make up the bulk of the
            card&amp;#x27;s content.
        &lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Card link&lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Another link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h3 id="article-images" class="sa-anchor"><span class="sa-anchor__body">Images<a class="sa-anchor__link" href="#article-images">#</a></span></h3>
                <p>Use <code>.card-img-top</code> to places an image to the top of the card and <code>.card-img-bottom</code> to place it to the bottom.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-5">
                            <div class="col-12 col-sm-6">
                                <div class="card"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div><img src="images/card-image-1-640x360.jpg" class="card-img-bottom h-auto" alt="" width="640" height="360" />
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;row g-5&quot;&gt;
    &lt;div class=&quot;col-12 col-sm-6&quot;&gt;
        &lt;div class=&quot;card&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-sm-6&quot;&gt;
        &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;img src=&quot;&quot; class=&quot;card-img-bottom h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h3 id="article-list-groups" class="sa-anchor"><span class="sa-anchor__body">List groups<a class="sa-anchor__link" href="#article-list-groups">#</a></span></h3>
                <p>Create lists of content in a card with a flush list group.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card w-20x">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;card w-20x&quot;&gt;
    &lt;ul class=&quot;list-group list-group-flush&quot;&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;An item&lt;/li&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h3 id="article-header-and-footer" class="sa-anchor"><span class="sa-anchor__body">Header And Footer<a class="sa-anchor__link" href="#article-header-and-footer">#</a></span></h3>
                <p>Add an optional header and/or footer within a card.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <h5 class="card-header">Featured</h5>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted"><small>2 days ago</small></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;h5 class=&quot;card-header&quot;&gt;Featured&lt;/h5&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h6&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            With supporting text below as a natural lead-in to additional content.
        &lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-footer text-muted&quot;&gt;&lt;small&gt;2 days ago&lt;/small&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h3 id="article-kitchen-sink" class="sa-anchor"><span class="sa-anchor__body">Kitchen Sink<a class="sa-anchor__link" href="#article-kitchen-sink">#</a></span></h3>
                <p>Mix and match multiple content types to create the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group — all wrapped in a fixed-width card.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card w-20x"><img src="images/card-image-1-320x180.jpg" class="card-img-top h-auto" alt="" width="320" height="180" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                            <div class="card-footer"><a href="#" class="card-link">Card link</a><a href="#" class="card-link">Another link</a></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;div class=&quot;card w-20x&quot;&gt;
    &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;320&quot; height=&quot;180&quot; /&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            Some quick example text to build on the card title and make up the bulk of the
            card&amp;#x27;s content.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;ul class=&quot;list-group list-group-flush&quot;&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;An item&lt;/li&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
        &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Card link&lt;/a
        &gt;&lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Another link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
                <h2 id="article-navigation" class="sa-anchor"><span class="sa-anchor__body">Navigation<a class="sa-anchor__link" href="#article-navigation">#</a></span></h2>
                <p>Add some navigation to a card&#x27;s header (or block) with Bootstrap&#x27;s <a href="https://stroyka-admin.html.themeforest.scompiler.ru/components-navs.html">nav</a> component or <a href="https://stroyka-admin.html.themeforest.scompiler.ru/components-tabs.html">tabs</a>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item"><a class="nav-link active" aria-current="true" href="#">Active<span class="nav-link-sa-indicator"></span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    <div class="sa-example__code collapse" id="example-8">
                        <pre><code class="language-html">&lt;div class=&quot;card text-center&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link active&quot; aria-current=&quot;true&quot; href=&quot;#&quot;
                    &gt;Active&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span
                &gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;
                    &gt;Disabled&lt;/a
                &gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            With supporting text below as a natural lead-in to additional content.
        &lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    </div>
                </div>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item"><a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    <div class="sa-example__code collapse" id="example-9">
                        <pre><code class="language-html">&lt;div class=&quot;card text-center&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;ul class=&quot;nav nav-pills card-header-pills&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;
                    &gt;Disabled&lt;/a
                &gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            With supporting text below as a natural lead-in to additional content.
        &lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    </div>
                </div>
                <h2 id="article-image-overlays" class="sa-anchor"><span class="sa-anchor__body">Image Overlays<a class="sa-anchor__link" href="#article-image-overlays">#</a></span></h2>
                <p>Turn an image into a card background and overlay your card&#x27;s text. Depending on the image, you may or may not need additional styles or utilities.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card bg-dark text-white shadow-none"><img src="images/card-image-1-640x360.jpg" class="card-img h-auto" alt="" width="640" height="360" />
                            <div class="card-img-overlay">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-10" aria-expanded="false" aria-controls="example-10">Source Code</button>
                    <div class="sa-example__code collapse" id="example-10">
                        <pre><code class="language-html">&lt;div class=&quot;card bg-dark text-white shadow-none&quot;&gt;
    &lt;img src=&quot;&quot; class=&quot;card-img h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
    &lt;div class=&quot;card-img-overlay&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            This is a wider card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
        &lt;/p&gt;
        &lt;p class=&quot;card-text&quot;&gt;Last updated 3 mins ago&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-10" aria-expanded="false" aria-controls="example-10">Source Code</button>
                    </div>
                </div>
                <h2 id="article-horizontal" class="sa-anchor"><span class="sa-anchor__body">Horizontal<a class="sa-anchor__link" href="#article-horizontal">#</a></span></h2>
                <p>Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with <code>.g-0</code> and use <code>.col-md-*</code> classes to make the card horizontal at the <code>md</code> breakpoint. Further adjustments may be needed depending on your card content.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4"><img src="images/card-image-1-640x360.jpg" class="h-100 w-100 object-fit-cover" alt="" width="640" height="360" /></div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-11" aria-expanded="false" aria-controls="example-11">Source Code</button>
                    <div class="sa-example__code collapse" id="example-11">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;row g-0&quot;&gt;
        &lt;div class=&quot;col-md-4&quot;&gt;
            &lt;img
                src=&quot;&quot;
                class=&quot;h-100 w-100 object-fit-cover&quot;
                alt=&quot;&quot;
                width=&quot;640&quot;
                height=&quot;360&quot;
            /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-md-8&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    This is a wider card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                &lt;/p&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-11" aria-expanded="false" aria-controls="example-11">Source Code</button>
                    </div>
                </div>
                <h2 id="article-card-styles" class="sa-anchor"><span class="sa-anchor__body">Card Styles<a class="sa-anchor__link" href="#article-card-styles">#</a></span></h2>
                <p>Cards include various options for customizing their backgrounds, borders, and color.</p>
                <h3 id="article-background-and-color" class="sa-anchor"><span class="sa-anchor__body">Background And Color<a class="sa-anchor__link" href="#article-background-and-color">#</a></span></h3>
                <p>Use <a href="https://getbootstrap.com/docs/5.0/utilities/colors/">text color</a> and <a href="https://getbootstrap.com/docs/5.0/utilities/background/">background utilities</a> to change the appearance of a card.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-5">
                            <div class="col-6">
                                <div class="card text-white bg-primary shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-dark bg-secondary shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-white bg-success shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Success card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-white bg-danger shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-white bg-warning shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Warning card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-white bg-info shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Info card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-dark bg-light shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Light card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-white bg-dark shadow-none">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Dark card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-12" aria-expanded="false" aria-controls="example-12">Source Code</button>
                    <div class="sa-example__code collapse" id="example-12">
                        <pre><code class="language-html">&lt;div class=&quot;row g-5&quot;&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-white bg-primary shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-white&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Primary card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-dark bg-secondary shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-dark&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Secondary card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-white bg-success shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-white&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Success card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-white bg-danger shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-white&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Danger card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-white bg-warning shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-white&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Warning card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-white bg-info shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-white&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Info card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-dark bg-light shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-dark&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Light card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card text-white bg-dark shadow-none&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-white&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Dark card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-12" aria-expanded="false" aria-controls="example-12">Source Code</button>
                    </div>
                </div>
                <h3 id="article-border" class="sa-anchor"><span class="sa-anchor__body">Border<a class="sa-anchor__link" href="#article-border">#</a></span></h3>
                <p>Use <a href="https://getbootstrap.com/docs/5.0/utilities/borders/">border utilities</a> to change just the <code>border-color</code> of a card. Note that you can put <code>.text-{color}</code> classes on the parent <code>.card</code> or a subset of the card&#x27;s contents as shown below.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-5">
                            <div class="col-6">
                                <div class="card card-sa-border border-primary">
                                    <div class="card-header border-primary">Header</div>
                                    <div class="card-body text-primary">
                                        <h5 class="card-title">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-primary">Footer</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-sa-border border-secondary">
                                    <div class="card-header border-secondary">Header</div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-secondary">Footer</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-sa-border border-success">
                                    <div class="card-header border-success">Header</div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Success card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-success">Footer</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-sa-border border-danger">
                                    <div class="card-header border-danger">Header</div>
                                    <div class="card-body text-danger">
                                        <h5 class="card-title">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-danger">Footer</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-sa-border border-warning">
                                    <div class="card-header border-warning">Header</div>
                                    <div class="card-body text-warning">
                                        <h5 class="card-title">Warning card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-warning">Footer</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-sa-border border-info">
                                    <div class="card-header border-info">Header</div>
                                    <div class="card-body text-info">
                                        <h5 class="card-title">Info card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-info">Footer</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-sa-border border-light">
                                    <div class="card-header border-light">Header</div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Light card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-light">Footer</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-sa-border border-dark">
                                    <div class="card-header border-dark">Header</div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Dark card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p>
                                    </div>
                                    <div class="card-footer border-dark">Footer</div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-13" aria-expanded="false" aria-controls="example-13">Source Code</button>
                    <div class="sa-example__code collapse" id="example-13">
                        <pre><code class="language-html">&lt;div class=&quot;row g-5&quot;&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-primary&quot;&gt;
            &lt;div class=&quot;card-header border-primary&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-primary&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Primary card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-primary&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-secondary&quot;&gt;
            &lt;div class=&quot;card-header border-secondary&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-dark&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Secondary card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-secondary&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-success&quot;&gt;
            &lt;div class=&quot;card-header border-success&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-success&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Success card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-success&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-danger&quot;&gt;
            &lt;div class=&quot;card-header border-danger&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-danger&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Danger card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-danger&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-warning&quot;&gt;
            &lt;div class=&quot;card-header border-warning&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-warning&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Warning card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-warning&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-info&quot;&gt;
            &lt;div class=&quot;card-header border-info&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-info&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Info card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-info&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-light&quot;&gt;
            &lt;div class=&quot;card-header border-light&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-dark&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Light card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-light&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6&quot;&gt;
        &lt;div class=&quot;card card-sa-border border-dark&quot;&gt;
            &lt;div class=&quot;card-header border-dark&quot;&gt;Header&lt;/div&gt;
            &lt;div class=&quot;card-body text-dark&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Dark card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer border-dark&quot;&gt;Footer&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-13" aria-expanded="false" aria-controls="example-13">Source Code</button>
                    </div>
                </div>
                <h2 id="article-card-layout" class="sa-anchor"><span class="sa-anchor__body">Card Layout<a class="sa-anchor__link" href="#article-card-layout">#</a></span></h2>
                <p>In addition to styling the content within cards, Bootstrap includes a few options for laying out series of cards. For the time being, <strong>these layout options are not yet responsive</strong>.</p>
                <h3 id="article-card-groups" class="sa-anchor"><span class="sa-anchor__body">Card Groups<a class="sa-anchor__link" href="#article-card-groups">#</a></span></h3>
                <p>Use card groups to render cards as a single, attached element with equal width and height columns. Card groups start off stacked and use <code>display: flex;</code> to become attached with uniform dimensions starting at the <code>sm</code> breakpoint.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card-group">
                            <div class="card"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
                            </div>
                            <div class="card"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
                            </div>
                            <div class="card"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-14" aria-expanded="false" aria-controls="example-14">Source Code</button>
                    <div class="sa-example__code collapse" id="example-14">
                        <pre><code class="language-html">&lt;div class=&quot;card-group&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
        &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
            &lt;p class=&quot;card-text&quot;&gt;
                This is a wider card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-footer&quot;&gt;
            &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot;&gt;
        &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
            &lt;p class=&quot;card-text&quot;&gt;
                This card has supporting text below as a natural lead-in to additional
                content.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-footer&quot;&gt;
            &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot;&gt;
        &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
            &lt;p class=&quot;card-text&quot;&gt;
                This is a wider card with supporting text below as a natural lead-in to
                additional content. This card has even longer content than the first to
                show that equal height action.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-footer&quot;&gt;
            &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-14" aria-expanded="false" aria-controls="example-14">Source Code</button>
                    </div>
                </div>
                <h3 id="article-grid-cards" class="sa-anchor"><span class="sa-anchor__body">Grid Cards<a class="sa-anchor__link" href="#article-grid-cards">#</a></span></h3>
                <p>Use the Bootstrap grid system and its <a href="https://getbootstrap.com/docs/5.0/layout/grid/#row-columns"><code>.row-cols</code> classes</a> to control how many grid columns (wrapped around your cards) you show per row. For example, here&#x27;s <code>.row-cols-1</code> laying out the cards on one column, and <code>.row-cols-md-2</code> splitting four cards to equal width across multiple rows, from the medium breakpoint up.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row row-cols-1 row-cols-md-2 g-5">
                            <div class="col">
                                <div class="card h-100"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a short card.</p>
                                    </div>
                                    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100"><img src="images/card-image-1-640x360.jpg" class="card-img-top h-auto" alt="" width="640" height="360" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-15" aria-expanded="false" aria-controls="example-15">Source Code</button>
                    <div class="sa-example__code collapse" id="example-15">
                        <pre><code class="language-html">&lt;div class=&quot;row row-cols-1 row-cols-md-2 g-5&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;card h-100&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    This is a longer card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;card h-100&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;This is a short card.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;card h-100&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    This is a longer card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;card h-100&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;card-img-top h-auto&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;360&quot; /&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    This is a longer card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-15" aria-expanded="false" aria-controls="example-15">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->