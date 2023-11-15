<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Scrollspy</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Scrollspy</h1>
                <div class="sa-article__subtitle">Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.</div>
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
                <p>Scrollspy has a few requirements to function properly:</p>
                <ul>
                    <li>It must be used on a Bootstrap <a href="https://getbootstrap.com/docs/5.0/components/navs-tabs/">nav component</a> or <a href="https://getbootstrap.com/docs/5.0/components/list-group/">list group</a>.</li>
                    <li>Scrollspy requires <code>position: relative;</code> on the element you&#x27;re spying on, usually the <code>&lt;body&gt;</code>.</li>
                    <li>Anchors (<code>&lt;a&gt;</code>) are required and must point to an element with that <code>id</code>.</li>
                </ul>
                <p>When successfully implemented, your nav or list group will update accordingly, moving the <code>.active</code> class from one item to the next based on their associated targets.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <nav id="scrollspy-example" class="nav nav-pills"><a href="#scrollspy-first" class="nav-link">First</a><a href="#scrollspy-second" class="nav-link">Second</a><a href="#scrollspy-third" class="nav-link">Third</a><a href="#scrollspy-fourth" class="nav-link">Fourth</a></nav>
                        <div data-bs-spy="scroll" data-bs-target="#scrollspy-example" data-bs-offset="0" class="overflow-auto mt-4 bg-secondary position-relative h-15x" tabindex="0">
                            <div id="scrollspy-first" class="p-5 pb-0">
                                <h5>First</h5>
                                <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            </div>
                            <div id="scrollspy-second" class="p-5 pb-0">
                                <h5>Second</h5>
                                <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            </div>
                            <div id="scrollspy-third" class="p-5 pb-0">
                                <h5>Third</h5>
                                <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            </div>
                            <div id="scrollspy-fourth" class="p-5">
                                <h5>Fourth</h5>
                                <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;nav id=&quot;scrollspy-example&quot; class=&quot;nav nav-pills&quot;&gt;
    &lt;a href=&quot;#scrollspy-first&quot; class=&quot;nav-link&quot;&gt;First&lt;/a
    &gt;&lt;a href=&quot;#scrollspy-second&quot; class=&quot;nav-link&quot;&gt;Second&lt;/a
    &gt;&lt;a href=&quot;#scrollspy-third&quot; class=&quot;nav-link&quot;&gt;Third&lt;/a
    &gt;&lt;a href=&quot;#scrollspy-fourth&quot; class=&quot;nav-link&quot;&gt;Fourth&lt;/a&gt;
&lt;/nav&gt;
&lt;div
    data-bs-spy=&quot;scroll&quot;
    data-bs-target=&quot;#scrollspy-example&quot;
    data-bs-offset=&quot;0&quot;
    class=&quot;overflow-auto mt-4 bg-secondary position-relative h-15x&quot;
    tabindex=&quot;0&quot;
&gt;
    &lt;div id=&quot;scrollspy-first&quot; class=&quot;p-5 pb-0&quot;&gt;
        &lt;h5&gt;First&lt;/h5&gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content for the scrollspy page. Note that as you
            scroll down the page, the appropriate navigation link is highlighted.
            It&amp;#x27;s repeated throughout the component example. We keep adding some more
            example copy here to emphasize the scrolling and highlighting.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div id=&quot;scrollspy-second&quot; class=&quot;p-5 pb-0&quot;&gt;
        &lt;h5&gt;Second&lt;/h5&gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content for the scrollspy page. Note that as you
            scroll down the page, the appropriate navigation link is highlighted.
            It&amp;#x27;s repeated throughout the component example. We keep adding some more
            example copy here to emphasize the scrolling and highlighting.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div id=&quot;scrollspy-third&quot; class=&quot;p-5 pb-0&quot;&gt;
        &lt;h5&gt;Third&lt;/h5&gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content for the scrollspy page. Note that as you
            scroll down the page, the appropriate navigation link is highlighted.
            It&amp;#x27;s repeated throughout the component example. We keep adding some more
            example copy here to emphasize the scrolling and highlighting.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div id=&quot;scrollspy-fourth&quot; class=&quot;p-5&quot;&gt;
        &lt;h5&gt;Fourth&lt;/h5&gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content for the scrollspy page. Note that as you
            scroll down the page, the appropriate navigation link is highlighted.
            It&amp;#x27;s repeated throughout the component example. We keep adding some more
            example copy here to emphasize the scrolling and highlighting.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->