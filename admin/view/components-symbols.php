<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Symbols</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Symbols</h1>
                <div class="sa-article__subtitle">Documentation and examples for symbols, our component for displaying user avatars and initials.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-sizes">Sizes</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-initials">Initials</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-status-badge">Status Badge</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-shape">Shape</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-icons">Icons</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-styles">Styles</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Typically, a symbol consists of a <code>.sa-symbol</code> container and an <code>&lt;img&gt;</code> child element.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl&quot;&gt;
    &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-sizes" class="sa-anchor"><span class="sa-anchor__body">Sizes<a class="sa-anchor__link" href="#article-sizes">#</a></span></h2>
                <p>Use the <code>.sa-symbol--size--*</code> classes to set the size of the symbol.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xs"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--sm"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--md"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xl"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xs&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--sm&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--md&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--lg&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xl&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <p>You can also set the symbol size using any font size utilities such as <code>fs-*</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle fs-6"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle fs-5"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle fs-4"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle fs-3"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle fs-2"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle fs-1"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle fs-6&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle fs-5&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle fs-4&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle fs-3&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle fs-2&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle fs-1&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-initials" class="sa-anchor"><span class="sa-anchor__body">Initials<a class="sa-anchor__link" href="#article-initials">#</a></span></h2>
                <p>Display initials using the <code>.sa-symbol__text</code> element instead of <code>&lt;img&gt;</code> if the user does not have an avatar.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xs">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--sm">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--md">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xl">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xs&quot;&gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--sm&quot;&gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--md&quot;&gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--lg&quot;&gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xl&quot;&gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl&quot;&gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-status-badge" class="sa-anchor"><span class="sa-anchor__body">Status Badge<a class="sa-anchor__link" href="#article-status-badge">#</a></span></h2>
                <p>Need to display user status? No problem, use the <code>.sa-symbol__status</code> element and the <code>.sa-symbol--status--*</code> modifier.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--status--offline"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--status--online"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--status--away"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--status--busy"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--status--offline
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--status--online
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--status--away
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--status--busy
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <p>Status in symbols of different sizes.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xs sa-symbol--status--online"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--sm sa-symbol--status--online"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--md sa-symbol--status--online"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--status--online"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xl sa-symbol--status--online"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl sa-symbol--status--online"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" />
                                    <div class="sa-symbol__status"></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--xs
                sa-symbol--status--online
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--sm
                sa-symbol--status--online
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--md
                sa-symbol--status--online
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--status--online
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--xl
                sa-symbol--status--online
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--xxl
                sa-symbol--status--online
            &quot;
        &gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;sa-symbol__status&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h2 id="article-shape" class="sa-anchor"><span class="sa-anchor__body">Shape<a class="sa-anchor__link" href="#article-shape">#</a></span></h2>
                <p>The shape of the symbol is set using the <code>.sa-symbol--shape--*</code> modifier.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--size--lg"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--size--lg sa-symbol--shape--rounded"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--size--lg sa-symbol--shape--circle"><img src="images/customers/customer-4-128x128.jpg" width="128" height="128" alt="" /></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--size--lg&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--size--lg sa-symbol--shape--rounded&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--size--lg sa-symbol--shape--circle&quot;&gt;
            &lt;img src=&quot;&quot; width=&quot;128&quot; height=&quot;128&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
                <h2 id="article-icons" class="sa-anchor"><span class="sa-anchor__body">Icons<a class="sa-anchor__link" href="#article-icons">#</a></span></h2>
                <p>Use the <code>.sa-symbol__icon</code> element to place the icon inside the symbol.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xs">
                                    <div class="sa-symbol__icon"><i class="fas fa-bacterium"></i></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--sm">
                                    <div class="sa-symbol__icon"><i class="fas fa-bacterium"></i></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--md">
                                    <div class="sa-symbol__icon"><i class="fas fa-bacterium"></i></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg">
                                    <div class="sa-symbol__icon"><i class="fas fa-bacterium"></i></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xl">
                                    <div class="sa-symbol__icon"><i class="fas fa-bacterium"></i></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl">
                                    <div class="sa-symbol__icon"><i class="fas fa-bacterium"></i></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    <div class="sa-example__code collapse" id="example-8">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xs&quot;&gt;
            &lt;div class=&quot;sa-symbol__icon&quot;&gt;&lt;i class=&quot;fas fa-bacterium&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--sm&quot;&gt;
            &lt;div class=&quot;sa-symbol__icon&quot;&gt;&lt;i class=&quot;fas fa-bacterium&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--md&quot;&gt;
            &lt;div class=&quot;sa-symbol__icon&quot;&gt;&lt;i class=&quot;fas fa-bacterium&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--lg&quot;&gt;
            &lt;div class=&quot;sa-symbol__icon&quot;&gt;&lt;i class=&quot;fas fa-bacterium&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xl&quot;&gt;
            &lt;div class=&quot;sa-symbol__icon&quot;&gt;&lt;i class=&quot;fas fa-bacterium&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;sa-symbol sa-symbol--shape--circle sa-symbol--size--xxl&quot;&gt;
            &lt;div class=&quot;sa-symbol__icon&quot;&gt;&lt;i class=&quot;fas fa-bacterium&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    </div>
                </div>
                <h2 id="article-styles" class="sa-anchor"><span class="sa-anchor__body">Styles<a class="sa-anchor__link" href="#article-styles">#</a></span></h2>
                <p>The style of the symbol is set using the <code>.sa-symbol--style--*</code> modifier.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--theme">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--primary">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--secondary">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--success">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--danger">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--warning">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--info">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--light">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--dark">
                                    <div class="sa-symbol__text">GB</div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    <div class="sa-example__code collapse" id="example-9">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--theme
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--primary
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--secondary
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--success
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--danger
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--warning
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--info
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--light
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div
            class=&quot;
                sa-symbol
                sa-symbol--shape--circle
                sa-symbol--size--lg
                sa-symbol--style--dark
            &quot;
        &gt;
            &lt;div class=&quot;sa-symbol__text&quot;&gt;GB&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->