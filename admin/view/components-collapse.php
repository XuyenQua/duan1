<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Collapse</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Collapse</h1>
                <div class="sa-article__subtitle">Toggle the visibility of content across your project with a few classes and our JavaScript plugins.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-multiple-targets">Multiple Targets</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Click the buttons below to show and hide another element via class changes:</p>
                <ul>
                    <li><code>.collapse</code> hides content</li>
                    <li><code>.collapsing</code> is applied during transitions</li>
                    <li><code>.collapse.show</code> shows content</li>
                </ul>
                <p>Generally, we recommend using a button with the <code>data-bs-target</code> attribute. While not recommended from a semantic point of view, you can also use a link with the <code>href</code> attribute (and a <code>role=&quot;button&quot;</code>). In both cases, the <code>data-bs-toggle=&quot;collapse&quot;</code> is required.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Link with href</a></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Button with data-bs-target</button></div>
                        </div>
                        <div class="sa-collapse">
                            <div class="sa-collapse__body collapse" id="collapseExample">
                                <div class="sa-collapse__content">
                                    <div class="py-3"></div>
                                    <div class="card card-body">Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;a
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;collapse&quot;
            href=&quot;#collapseExample&quot;
            role=&quot;button&quot;
            aria-expanded=&quot;false&quot;
            aria-controls=&quot;collapseExample&quot;
            &gt;Link with href&lt;/a
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;collapse&quot;
            data-bs-target=&quot;#collapseExample&quot;
            aria-expanded=&quot;false&quot;
            aria-controls=&quot;collapseExample&quot;
        &gt;
            Button with data-bs-target
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;sa-collapse&quot;&gt;
    &lt;div class=&quot;sa-collapse__body collapse&quot; id=&quot;collapseExample&quot;&gt;
        &lt;div class=&quot;sa-collapse__content&quot;&gt;
            &lt;div class=&quot;py-3&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;card card-body&quot;&gt;
                Some placeholder content for the collapse component. This panel is hidden
                by default but revealed when the user activates the relevant trigger.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-multiple-targets" class="sa-anchor"><span class="sa-anchor__body">Multiple Targets<a class="sa-anchor__link" href="#article-multiple-targets">#</a></span></h2>
                <p>A <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide multiple elements by referencing them with a selector in its <code>href</code> or <code>data-bs-target</code> attribute. Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide an element if they each reference it with their <code>href</code> or <code>data-bs-target</code> attribute</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button></div>
                            <div class="col-auto"><button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="sa-collapse">
                                    <div class="sa-collapse__body collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="sa-collapse__content">
                                            <div class="py-3"></div>
                                            <div class="card card-body">Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="sa-collapse">
                                    <div class="sa-collapse__body collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="sa-collapse__content">
                                            <div class="py-3"></div>
                                            <div class="card card-body">Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;a
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;collapse&quot;
            href=&quot;#multiCollapseExample1&quot;
            role=&quot;button&quot;
            aria-expanded=&quot;false&quot;
            aria-controls=&quot;multiCollapseExample1&quot;
            &gt;Toggle first element&lt;/a
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;collapse&quot;
            data-bs-target=&quot;#multiCollapseExample2&quot;
            aria-expanded=&quot;false&quot;
            aria-controls=&quot;multiCollapseExample2&quot;
        &gt;
            Toggle second element
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            class=&quot;btn btn-primary&quot;
            type=&quot;button&quot;
            data-bs-toggle=&quot;collapse&quot;
            data-bs-target=&quot;.multi-collapse&quot;
            aria-expanded=&quot;false&quot;
            aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;
        &gt;
            Toggle both elements
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;sa-collapse&quot;&gt;
            &lt;div
                class=&quot;sa-collapse__body collapse multi-collapse&quot;
                id=&quot;multiCollapseExample1&quot;
            &gt;
                &lt;div class=&quot;sa-collapse__content&quot;&gt;
                    &lt;div class=&quot;py-3&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;card card-body&quot;&gt;
                        Some placeholder content for the first collapse component of this
                        multi-collapse example. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;sa-collapse&quot;&gt;
            &lt;div
                class=&quot;sa-collapse__body collapse multi-collapse&quot;
                id=&quot;multiCollapseExample2&quot;
            &gt;
                &lt;div class=&quot;sa-collapse__content&quot;&gt;
                    &lt;div class=&quot;py-3&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;card card-body&quot;&gt;
                        Some placeholder content for the second collapse component of this
                        multi-collapse example. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->