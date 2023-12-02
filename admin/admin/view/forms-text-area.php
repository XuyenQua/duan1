<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forms</li>
                        <li class="breadcrumb-item active" aria-current="page">Text Area</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Text Area</h1>
                <div class="sa-article__subtitle">Text area for entering large amounts of text. Documentation and description of possible sizes and states.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-sizing">Sizing</a>
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
                <p>Unlike a simple text field, a text area can contain multi-line text.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><textarea placeholder="Text Area" class="form-control" rows="4"></textarea></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;textarea placeholder=&quot;Text Area&quot; class=&quot;form-control&quot; rows=&quot;4&quot;&gt;&lt;/textarea&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-sizing" class="sa-anchor"><span class="sa-anchor__body">Sizing<a class="sa-anchor__link" href="#article-sizing">#</a></span></h2>
                <p>Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><textarea placeholder="Large" class="form-control form-control-lg" rows="2"></textarea><textarea placeholder="Normal" class="form-control mt-3" rows="2"></textarea><textarea placeholder="Small" class="form-control mt-3 form-control-sm" rows="2"></textarea></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;textarea placeholder=&quot;Large&quot; class=&quot;form-control form-control-lg&quot; rows=&quot;2&quot;&gt;&lt;/textarea
&gt;&lt;textarea placeholder=&quot;Normal&quot; class=&quot;form-control mt-3&quot; rows=&quot;2&quot;&gt;&lt;/textarea
&gt;&lt;textarea
    placeholder=&quot;Small&quot;
    class=&quot;form-control mt-3 form-control-sm&quot;
    rows=&quot;2&quot;
&gt;&lt;/textarea&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-states" class="sa-anchor"><span class="sa-anchor__body">States<a class="sa-anchor__link" href="#article-states">#</a></span></h2>
                <p>A text area can be in several different states. Below you can see a demo of these states:</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><textarea placeholder="Normal" class="form-control" rows="2"></textarea><textarea placeholder="Readonly" readonly="" class="form-control mt-3" rows="2"></textarea><textarea placeholder="Disabled" disabled="" class="form-control mt-3" rows="2"></textarea><textarea placeholder="Valid" class="form-control is-valid mt-3" rows="2"></textarea><textarea placeholder="Invalid" class="form-control is-invalid mt-3" rows="2"></textarea></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;textarea placeholder=&quot;Normal&quot; class=&quot;form-control&quot; rows=&quot;2&quot;&gt;&lt;/textarea
&gt;&lt;textarea
    placeholder=&quot;Readonly&quot;
    readonly=&quot;&quot;
    class=&quot;form-control mt-3&quot;
    rows=&quot;2&quot;
&gt;&lt;/textarea
&gt;&lt;textarea
    placeholder=&quot;Disabled&quot;
    disabled=&quot;&quot;
    class=&quot;form-control mt-3&quot;
    rows=&quot;2&quot;
&gt;&lt;/textarea
&gt;&lt;textarea placeholder=&quot;Valid&quot; class=&quot;form-control is-valid mt-3&quot; rows=&quot;2&quot;&gt;&lt;/textarea
&gt;&lt;textarea placeholder=&quot;Invalid&quot; class=&quot;form-control is-invalid mt-3&quot; rows=&quot;2&quot;&gt;&lt;/textarea&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->