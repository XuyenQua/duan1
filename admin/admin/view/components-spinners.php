<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Spinners</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Spinners</h1>
                <div class="sa-article__subtitle">Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-border-spinner">Border spinner</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-colors">Colors</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-growing-spinner">Growing spinner</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-alignment">Alignment</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-size">Size</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-buttons">Buttons</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-border-spinner" class="sa-anchor"><span class="sa-anchor__body">Border spinner<a class="sa-anchor__link" href="#article-border-spinner">#</a></span></h2>
                <p>Use the border spinners for a lightweight loading indicator.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="spinner-border d-block" role="status"><span class="visually-hidden">Loading...</span></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;spinner-border d-block&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-colors" class="sa-anchor"><span class="sa-anchor__body">Colors<a class="sa-anchor__link" href="#article-colors">#</a></span></h2>
                <p>The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with <a href="https://getbootstrap.com/docs/5.0/utilities/colors/">text color utilities</a>. You can use any of our text color utilities on the standard spinner.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto">
                                <div class="spinner-border d-block text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-border d-block text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-border d-block text-success" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-border d-block text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-border d-block text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-border d-block text-info" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-border d-block text-light" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-border d-block text-dark" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-primary&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-secondary&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-success&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-danger&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-warning&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-info&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-light&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border d-block text-dark&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-growing-spinner" class="sa-anchor"><span class="sa-anchor__body">Growing spinner<a class="sa-anchor__link" href="#article-growing-spinner">#</a></span></h2>
                <p>If you don&#x27;t fancy a border spinner, switch to the grow spinner. While it doesn&#x27;t technically spin, it does repeatedly grow!</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-success" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-info" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-light" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow d-block text-dark" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-primary&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-secondary&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-success&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-danger&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-warning&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-info&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-light&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow d-block text-dark&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-alignment" class="sa-anchor"><span class="sa-anchor__body">Alignment<a class="sa-anchor__link" href="#article-alignment">#</a></span></h2>
                <p>Use <a href="https://getbootstrap.com/docs/5.0/utilities/flex/">flexbox utilities</a>, <a href="https://getbootstrap.com/docs/5.0/utilities/float/">float utilities</a>, or <a href="https://getbootstrap.com/docs/5.0/content/typography/">text alignment</a> utilities to place spinners exactly where you need them in any situation.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="d-flex align-items-center">
                            <div class="text-muted">Loading...</div>
                            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;d-flex align-items-center&quot;&gt;
    &lt;div class=&quot;text-muted&quot;&gt;Loading...&lt;/div&gt;
    &lt;div class=&quot;spinner-border ms-auto&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-size" class="sa-anchor"><span class="sa-anchor__body">Size<a class="sa-anchor__link" href="#article-size">#</a></span></h2>
                <p>Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto">
                                <div class="spinner-border spinner-border-sm d-block" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="spinner-grow spinner-grow-sm d-block" role="status"><span class="visually-hidden">Loading...</span></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-border spinner-border-sm d-block&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;spinner-grow spinner-grow-sm d-block&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h2 id="article-buttons" class="sa-anchor"><span class="sa-anchor__body">Buttons<a class="sa-anchor__link" href="#article-buttons">#</a></span></h2>
                <p>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button class="btn btn-primary" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span></button></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" disabled=""><span class="spinner-border spinner-border-sm me-3" role="status" aria-hidden="true"></span>Loading...</button></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span></button></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" disabled=""><span class="spinner-grow spinner-grow-sm me-3" role="status" aria-hidden="true"></span>Loading...</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled=&quot;&quot;&gt;
            &lt;span
                class=&quot;spinner-border spinner-border-sm&quot;
                role=&quot;status&quot;
                aria-hidden=&quot;true&quot;
            &gt;&lt;/span
            &gt;&lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled=&quot;&quot;&gt;
            &lt;span
                class=&quot;spinner-border spinner-border-sm me-3&quot;
                role=&quot;status&quot;
                aria-hidden=&quot;true&quot;
            &gt;&lt;/span
            &gt;Loading...
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled=&quot;&quot;&gt;
            &lt;span
                class=&quot;spinner-grow spinner-grow-sm&quot;
                role=&quot;status&quot;
                aria-hidden=&quot;true&quot;
            &gt;&lt;/span
            &gt;&lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled=&quot;&quot;&gt;
            &lt;span
                class=&quot;spinner-grow spinner-grow-sm me-3&quot;
                role=&quot;status&quot;
                aria-hidden=&quot;true&quot;
            &gt;&lt;/span
            &gt;Loading...
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->