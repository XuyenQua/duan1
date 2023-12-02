<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Offcanvas</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Offcanvas</h1>
                <div class="sa-article__subtitle">Build hidden sidebars into your project for navigation, shopping carts, and more with a few classes and our JavaScript plugin.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-placement">Placement</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Use the buttons below to show and hide an offcanvas element via JavaScript that toggles the<code>.show</code> class on an element with the <code>.offcanvas</code> class.</p>
                <ul>
                    <li><code>.offcanvas</code> hides content (default)</li>
                    <li><code>.offcanvas.show</code> shows content</li>
                </ul>
                <p>You can use a link with the <code>href</code> attribute, or a button with the<code>data-bs-target</code> attribute. In both cases, the<code>data-bs-toggle=&quot;offcanvas&quot;</code> is required.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Link with href</a></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Button with data-bs-target</button></div>
                        </div>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</div>
                                <div class="dropdown mt-4"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown-menu-button-inside-offcanvas" data-bs-toggle="dropdown">Dropdown button</button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown-menu-button-inside-offcanvas">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;a
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;offcanvas&quot;
            href=&quot;#offcanvasExample&quot;
            role=&quot;button&quot;
            aria-controls=&quot;offcanvasExample&quot;
            &gt;Link with href&lt;/a
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;offcanvas&quot;
            data-bs-target=&quot;#offcanvasExample&quot;
            aria-controls=&quot;offcanvasExample&quot;
        &gt;
            Button with data-bs-target
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;offcanvas offcanvas-start&quot;
    tabindex=&quot;-1&quot;
    id=&quot;offcanvasExample&quot;
    aria-labelledby=&quot;offcanvasExampleLabel&quot;
&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasExampleLabel&quot;&gt;Offcanvas&lt;/h5&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;sa-close sa-close--modal&quot;
            data-bs-dismiss=&quot;offcanvas&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;
        &lt;div&gt;
            Some text as placeholder. In real life you can have the elements you have
            chosen. Like, text, images, lists, etc.
        &lt;/div&gt;
        &lt;div class=&quot;dropdown mt-4&quot;&gt;
            &lt;button
                class=&quot;btn btn-secondary dropdown-toggle&quot;
                type=&quot;button&quot;
                id=&quot;dropdown-menu-button-inside-offcanvas&quot;
                data-bs-toggle=&quot;dropdown&quot;
            &gt;
                Dropdown button
            &lt;/button&gt;
            &lt;ul
                class=&quot;dropdown-menu&quot;
                aria-labelledby=&quot;dropdown-menu-button-inside-offcanvas&quot;
            &gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-placement" class="sa-anchor"><span class="sa-anchor__body">Placement<a class="sa-anchor__link" href="#article-placement">#</a></span></h2>
                <p>There&#x27;s no default placement for offcanvas components, so you must add one of the modifier classes below;</p>
                <ul>
                    <li><code>.offcanvas-start</code> places offcanvas on the left of the viewport (shown above)</li>
                    <li><code>.offcanvas-end</code> places offcanvas on the right of the viewport</li>
                    <li><code>.offcanvas-top</code> places offcanvas on the top of the viewport</li>
                    <li><code>.offcanvas-bottom</code> places offcanvas on the bottom of the viewport</li>
                </ul>
                <p>Try the top, right, and bottom examples out below.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Top offcanvas</button></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">End offcanvas</button></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Bottom offcanvas</button></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasStart" aria-controls="offcanvasStart">Start offcanvas</button></div>
                        </div>
                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasTopLabel">Offcanvas top</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">...</div>
                        </div>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasEndLabel">Offcanvas end</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">...</div>
                        </div>
                        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasBottomLabel">Offcanvas bottom</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">...</div>
                        </div>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasStartLabel">Offcanvas start</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">...</div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;offcanvas&quot;
            data-bs-target=&quot;#offcanvasTop&quot;
            aria-controls=&quot;offcanvasTop&quot;
        &gt;
            Top offcanvas
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;offcanvas&quot;
            data-bs-target=&quot;#offcanvasEnd&quot;
            aria-controls=&quot;offcanvasEnd&quot;
        &gt;
            End offcanvas
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;offcanvas&quot;
            data-bs-target=&quot;#offcanvasBottom&quot;
            aria-controls=&quot;offcanvasBottom&quot;
        &gt;
            Bottom offcanvas
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;offcanvas&quot;
            data-bs-target=&quot;#offcanvasStart&quot;
            aria-controls=&quot;offcanvasStart&quot;
        &gt;
            Start offcanvas
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;offcanvas offcanvas-top&quot;
    tabindex=&quot;-1&quot;
    id=&quot;offcanvasTop&quot;
    aria-labelledby=&quot;offcanvasTopLabel&quot;
&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 id=&quot;offcanvasTopLabel&quot;&gt;Offcanvas top&lt;/h5&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;sa-close sa-close--modal&quot;
            data-bs-dismiss=&quot;offcanvas&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;offcanvas offcanvas-end&quot;
    tabindex=&quot;-1&quot;
    id=&quot;offcanvasEnd&quot;
    aria-labelledby=&quot;offcanvasEndLabel&quot;
&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 id=&quot;offcanvasEndLabel&quot;&gt;Offcanvas end&lt;/h5&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;sa-close sa-close--modal&quot;
            data-bs-dismiss=&quot;offcanvas&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;offcanvas offcanvas-bottom&quot;
    tabindex=&quot;-1&quot;
    id=&quot;offcanvasBottom&quot;
    aria-labelledby=&quot;offcanvasBottomLabel&quot;
&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 id=&quot;offcanvasBottomLabel&quot;&gt;Offcanvas bottom&lt;/h5&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;sa-close sa-close--modal&quot;
            data-bs-dismiss=&quot;offcanvas&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;offcanvas offcanvas-start&quot;
    tabindex=&quot;-1&quot;
    id=&quot;offcanvasStart&quot;
    aria-labelledby=&quot;offcanvasStartLabel&quot;
&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 id=&quot;offcanvasStartLabel&quot;&gt;Offcanvas start&lt;/h5&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;sa-close sa-close--modal&quot;
            data-bs-dismiss=&quot;offcanvas&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->