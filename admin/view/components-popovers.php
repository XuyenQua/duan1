<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Popovers</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Popovers</h1>
                <div class="sa-article__subtitle">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-four-directions">Four directions</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-dismiss-on-next-click">Dismiss on next click</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-disabled-elements">Disabled elements</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>A basic popover with title and content.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Popover title" data-bs-content="And here&#x27;s some amazing content. It&#x27;s very engaging. Right?">Click to toggle popover</button></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;button
    type=&quot;button&quot;
    class=&quot;btn btn-primary&quot;
    data-bs-toggle=&quot;popover&quot;
    title=&quot;Popover title&quot;
    data-bs-content=&quot;And here&amp;#x27;s some amazing content. It&amp;#x27;s very engaging. Right?&quot;
&gt;
    Click to toggle popover
&lt;/button&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-four-directions" class="sa-anchor"><span class="sa-anchor__body">Four directions<a class="sa-anchor__link" href="#article-four-directions">#</a></span></h2>
                <p>Four options are available: top, right, bottom, and left aligned. Directions are mirrored when using Bootstrap in RTL.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">Popover on left</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">Popover on top</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">Popover on bottom</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">Popover on right</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-secondary&quot;
            data-bs-container=&quot;body&quot;
            data-bs-toggle=&quot;popover&quot;
            data-bs-placement=&quot;left&quot;
            data-bs-content=&quot;Left popover&quot;
        &gt;
            Popover on left
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-secondary&quot;
            data-bs-container=&quot;body&quot;
            data-bs-toggle=&quot;popover&quot;
            data-bs-placement=&quot;top&quot;
            data-bs-content=&quot;Top popover&quot;
        &gt;
            Popover on top
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-secondary&quot;
            data-bs-container=&quot;body&quot;
            data-bs-toggle=&quot;popover&quot;
            data-bs-placement=&quot;bottom&quot;
            data-bs-content=&quot;Bottom popover&quot;
        &gt;
            Popover on bottom
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-secondary&quot;
            data-bs-container=&quot;body&quot;
            data-bs-toggle=&quot;popover&quot;
            data-bs-placement=&quot;right&quot;
            data-bs-content=&quot;Right popover&quot;
        &gt;
            Popover on right
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-dismiss-on-next-click" class="sa-anchor"><span class="sa-anchor__body">Dismiss on next click<a class="sa-anchor__link" href="#article-dismiss-on-next-click">#</a></span></h2>
                <p>Use the <code>focus</code> trigger to dismiss popovers on the user&#x27;s next click of a different element than the toggle element.</p>
                <div class="alert alert-info">
                    <h5>Specific markup required for dismiss-on-next-click</h5>
                    <p class="mb-0">For proper cross-browser and cross-platform behavior, you must use the <code>&lt;a&gt;</code> tag, <em>not</em> the <code>&lt;button&gt;</code> tag, and you also must include a <code>tabindex</code> attribute.</p>
                </div>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><a tabindex="0" class="btn btn-primary" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here&#x27;s some amazing content. It&#x27;s very engaging. Right?">Dismissible popover</a></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;a
    tabindex=&quot;0&quot;
    class=&quot;btn btn-primary&quot;
    role=&quot;button&quot;
    data-bs-toggle=&quot;popover&quot;
    data-bs-trigger=&quot;focus&quot;
    title=&quot;Dismissible popover&quot;
    data-bs-content=&quot;And here&amp;#x27;s some amazing content. It&amp;#x27;s very engaging. Right?&quot;
    &gt;Dismissible popover&lt;/a
&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-disabled-elements" class="sa-anchor"><span class="sa-anchor__body">Disabled elements<a class="sa-anchor__link" href="#article-disabled-elements">#</a></span></h2>
                <p>Elements with the <code>disabled</code> attribute aren&#x27;t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you&#x27;ll want to trigger the popover from a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made keyboard-focusable using <code>tabindex=&quot;0&quot;</code>.</p>
                <p>For disabled popover triggers, you may also prefer <code>data-bs-trigger=&quot;hover focus&quot;</code> so that the popover appears as immediate visual feedback to your users as they may not expect to <em>click</em> on a disabled element.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover"><button class="btn btn-primary" type="button" disabled="">Disabled button</button></span></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;span
    class=&quot;d-inline-block&quot;
    tabindex=&quot;0&quot;
    data-bs-toggle=&quot;popover&quot;
    data-bs-trigger=&quot;hover focus&quot;
    data-bs-content=&quot;Disabled popover&quot;
    &gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled=&quot;&quot;&gt;
        Disabled button
    &lt;/button&gt;&lt;/span
&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->