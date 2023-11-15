<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Buttons</h1>
                <div class="sa-article__subtitle">Use Bootstrap&#x27;s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-outline-buttons">Outline buttons</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-sizes">Sizes</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-multiline">Multiline</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-disabled-state">Disabled State</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-loading-state">Loading State</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-pill">Pill</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-secondary">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-success">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-danger">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-warning">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-info">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-light">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-dark">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Button&lt;/button&gt;&lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Button&lt;/button&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-outline-buttons" class="sa-anchor"><span class="sa-anchor__body">Outline buttons<a class="sa-anchor__link" href="#article-outline-buttons">#</a></span></h2>
                <p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-outline-primary">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-secondary">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-success">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-danger">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-warning">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-info">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-light">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-outline-dark">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <div class="alert alert-info">Some of the button styles use a relatively light foreground color, and should only be used on a dark background in order to have sufficient contrast.</div>
                <h2 id="article-sizes" class="sa-anchor"><span class="sa-anchor__body">Sizes<a class="sa-anchor__link" href="#article-sizes">#</a></span></h2>
                <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-lg">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sm">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-multiline" class="sa-anchor"><span class="sa-anchor__body">Multiline<a class="sa-anchor__link" href="#article-multiline">#</a></span></h2>
                <p>Buttons can also contain multi-line content.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-lg">Button<br />Test multiline button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary">Button<br />Test multiline button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sm">Button<br />Test multiline button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;
            Button&lt;br /&gt;Test multiline button
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
            Button&lt;br /&gt;Test multiline button
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;
            Button&lt;br /&gt;Test multiline button
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-disabled-state" class="sa-anchor"><span class="sa-anchor__body">Disabled State<a class="sa-anchor__link" href="#article-disabled-state">#</a></span></h2>
                <p>Make buttons look inactive by adding the <code>disabled</code> boolean attribute to any <code>&lt;button&gt;</code> element. Disabled buttons have <code>pointer-events: none</code> applied to, preventing hover and active states from triggering.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-lg" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sm" disabled="">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <p>Disabled buttons in the different color variations.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-secondary" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-success" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-danger" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-warning" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-info" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-light" disabled="">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-dark" disabled="">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; disabled=&quot;&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h2 id="article-loading-state" class="sa-anchor"><span class="sa-anchor__body">Loading State<a class="sa-anchor__link" href="#article-loading-state">#</a></span></h2>
                <p>Turn buttons to the loading state by adding <code>.btn-sa-loading</code> class.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sa-loading btn-lg">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sa-loading btn-sm">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sa-loading btn-lg&quot;&gt;
            Button
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sa-loading btn-sm&quot;&gt;
            Button
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
                <p>Buttons in loading state and in different color variations.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-secondary btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-success btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-danger btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-warning btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-info btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-light btn-sa-loading">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-dark btn-sa-loading">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    <div class="sa-example__code collapse" id="example-8">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark btn-sa-loading&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    </div>
                </div>
                <h2 id="article-pill" class="sa-anchor"><span class="sa-anchor__body">Pill<a class="sa-anchor__link" href="#article-pill">#</a></span></h2>
                <p>Add the <code>.btn-sa-pill</code> class to get the rounded buttons.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sa-pill btn-lg">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sa-pill">Button</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary btn-sa-pill btn-sm">Button</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    <div class="sa-example__code collapse" id="example-9">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sa-pill btn-lg&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sa-pill&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sa-pill btn-sm&quot;&gt;Button&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->