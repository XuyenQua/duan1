<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forms</li>
                        <li class="breadcrumb-item active" aria-current="page">Range</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Range</h1>
                <div class="sa-article__subtitle">Consistent cross-browser and cross-device range input. Documentation and description for the corresponding control.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-states">States</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Create custom <code>&lt;input type=&quot;range&quot;&gt;</code> controls with <code>.form-range</code>. The track (the background) and thumb (the value) are both styled to appear the same across browsers.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><label for="customRange1" class="form-label">Example range</label><input type="range" class="form-range" id="customRange1" /></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;label for=&quot;customRange1&quot; class=&quot;form-label&quot;&gt;Example range&lt;/label
&gt;&lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange1&quot; /&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-states" class="sa-anchor"><span class="sa-anchor__body">States<a class="sa-anchor__link" href="#article-states">#</a></span></h2>
                <p>A range can be in several different states. Below you can see a demo of these states:</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="mb-4"><label for="customRange2-normal" class="form-label">Normal</label><input type="range" class="form-range" id="customRange2-normal" /></div>
                        <div><label for="customRange2-disabled" class="form-label">Disabled</label><input type="range" class="form-range" id="customRange2-disabled" disabled="" /></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;mb-4&quot;&gt;
    &lt;label for=&quot;customRange2-normal&quot; class=&quot;form-label&quot;&gt;Normal&lt;/label
    &gt;&lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange2-normal&quot; /&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;label for=&quot;customRange2-disabled&quot; class=&quot;form-label&quot;&gt;Disabled&lt;/label
    &gt;&lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange2-disabled&quot; disabled=&quot;&quot; /&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->