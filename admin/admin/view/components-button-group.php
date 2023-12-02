<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Button Group</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Button Group</h1>
                <div class="sa-article__subtitle">Group a series of buttons together on a single line or stack them in a vertical column.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-button-toolbar">Button toolbar</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-sizing">Sizing</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-nesting">Nesting</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-vertical-variation">Vertical Variation</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="btn-group" role="group" aria-label="Basic example"><button type="button" class="btn btn-primary">Left</button><button type="button" class="btn btn-primary">Middle</button><button type="button" class="btn btn-primary">Right</button></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-button-toolbar" class="sa-anchor"><span class="sa-anchor__body">Button toolbar<a class="sa-anchor__link" href="#article-button-toolbar">#</a></span></h2>
                <p>Combine sets of button groups into button toolbars for more complex components. Use utility classes as needed to space out groups, buttons, and more.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-3" role="group" aria-label="First group"><button type="button" class="btn btn-primary">1</button><button type="button" class="btn btn-primary">2</button><button type="button" class="btn btn-primary">3</button><button type="button" class="btn btn-primary">4</button></div>
                            <div class="btn-group me-3" role="group" aria-label="Second group"><button type="button" class="btn btn-secondary">5</button><button type="button" class="btn btn-secondary">6</button><button type="button" class="btn btn-secondary">7</button></div>
                            <div class="btn-group" role="group" aria-label="Third group"><button type="button" class="btn btn-info">8</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
    &lt;div class=&quot;btn-group me-3&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button
        &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button
        &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;3&lt;/button
        &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;btn-group me-3&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;5&lt;/button
        &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;6&lt;/button
        &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;7&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;8&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-sizing" class="sa-anchor"><span class="sa-anchor__body">Sizing<a class="sa-anchor__link" href="#article-sizing">#</a></span></h2>
                <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto">
                                <div class="btn-group btn-group-lg" role="group" aria-label="Large group"><button type="button" class="btn btn-primary">1</button><button type="button" class="btn btn-primary">2</button><button type="button" class="btn btn-primary">3</button></div>
                            </div>
                            <div class="col-auto">
                                <div class="btn-group" role="group" aria-label="Normal group"><button type="button" class="btn btn-primary">1</button><button type="button" class="btn btn-primary">2</button><button type="button" class="btn btn-primary">3</button></div>
                            </div>
                            <div class="col-auto">
                                <div class="btn-group btn-group-sm" role="group" aria-label="Small group"><button type="button" class="btn btn-primary">1</button><button type="button" class="btn btn-primary">2</button><button type="button" class="btn btn-primary">3</button></div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;btn-group btn-group-lg&quot; role=&quot;group&quot; aria-label=&quot;Large group&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button
            &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button
            &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;3&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Normal group&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button
            &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button
            &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;3&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;Small group&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button
            &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button
            &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;3&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-nesting" class="sa-anchor"><span class="sa-anchor__body">Nesting<a class="sa-anchor__link" href="#article-nesting">#</a></span></h2>
                <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown"><button type="button" class="btn btn-primary">1</button><button type="button" class="btn btn-primary">2</button>
                            <div class="btn-group" role="group"><button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Button group with nested dropdown&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
    &lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
        &lt;button
            id=&quot;btnGroupDrop1&quot;
            type=&quot;button&quot;
            class=&quot;btn btn-primary dropdown-toggle&quot;
            data-bs-toggle=&quot;dropdown&quot;
            aria-expanded=&quot;false&quot;
        &gt;
            Dropdown
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupDrop1&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-vertical-variation" class="sa-anchor"><span class="sa-anchor__body">Vertical Variation<a class="sa-anchor__link" href="#article-vertical-variation">#</a></span></h2>
                <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong>Split button dropdowns are not supported here.</strong></p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group"><button type="button" class="btn btn-primary">1</button><button type="button" class="btn btn-primary">2</button><button type="button" class="btn btn-primary">3</button></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical button group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;3&lt;/button&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->