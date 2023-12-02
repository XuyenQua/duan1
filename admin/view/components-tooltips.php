<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Tooltips</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Tooltips</h1>
                <div class="sa-article__subtitle">Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-bs-attributes for local title storage.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Hover over the links below to see tooltips:</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you&#x27;ve now seen how <a href="#" data-bs-toggle="tooltip" title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" title="The last tip!">your own</a> site or project.</div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        Placeholder text to demonstrate some
        &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Default tooltip&quot;&gt;inline links&lt;/a&gt; with
        tooltips. This is now just filler, no killer. Content placed here just to mimic
        the presence of
        &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Another tooltip&quot;&gt;real text&lt;/a&gt;. And
        all that just to give you an idea of how tooltips would look when used in
        real-world situations. So hopefully you&amp;#x27;ve now seen how
        &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Another one here too&quot;
            &gt;these tooltips on links&lt;/a
        &gt;
        can work in practice, once you use them on
        &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;The last tip!&quot;&gt;your own&lt;/a&gt; site or
        project.
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left. Directions are mirrored when using Bootstrap in RTL.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Tooltip on left</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Tooltip on right</button></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;tooltip&quot;
            data-bs-placement=&quot;left&quot;
            title=&quot;Tooltip on left&quot;
        &gt;
            Tooltip on left
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;tooltip&quot;
            data-bs-placement=&quot;top&quot;
            title=&quot;Tooltip on top&quot;
        &gt;
            Tooltip on top
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;tooltip&quot;
            data-bs-placement=&quot;bottom&quot;
            title=&quot;Tooltip on bottom&quot;
        &gt;
            Tooltip on bottom
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;tooltip&quot;
            data-bs-placement=&quot;right&quot;
            title=&quot;Tooltip on right&quot;
        &gt;
            Tooltip on right
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <p>And with custom HTML added:</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;">Tooltip with HTML</button></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;button
    type=&quot;button&quot;
    class=&quot;btn btn-secondary&quot;
    data-bs-toggle=&quot;tooltip&quot;
    data-bs-html=&quot;true&quot;
    title=&quot;&amp;lt;em&amp;gt;Tooltip&amp;lt;/em&amp;gt; &amp;lt;u&amp;gt;with&amp;lt;/u&amp;gt; &amp;lt;b&amp;gt;HTML&amp;lt;/b&amp;gt;&quot;
&gt;
    Tooltip with HTML
&lt;/button&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->