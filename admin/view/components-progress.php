<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Progress</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Progress</h1>
                <div class="sa-article__subtitle">Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-labels">Labels</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-height">Height</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-backgrounds">Backgrounds</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-striped">Striped</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-animated-stripes">Animated stripes</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
                <ul>
                    <li>We use the <code>.progress</code> as a wrapper to indicate the max value of the progress bar.</li>
                    <li>We use the inner <code>.progress-bar</code> to indicate the progress so far.</li>
                    <li>The <code>.progress-bar</code> requires an inline style, utility class, or custom CSS to set their width.</li>
                    <li>The <code>.progress-bar</code> also requires some <code>role</code> and <code>aria</code> attributes to make it accessible.</li>
                </ul>
                <p>Put that all together, and you have the following examples.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="progress" style="--sa-progress--value:0%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:25%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:50%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:75%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:100%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;progress&quot; style=&quot;--sa-progress--value: 0%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;0&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 25%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;25&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 50%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;50&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 75%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;75&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 100%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;100&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-labels" class="sa-anchor"><span class="sa-anchor__body">Labels<a class="sa-anchor__link" href="#article-labels">#</a></span></h2>
                <p>Add labels to your progress bars by placing text within the <code>.progress-bar</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="progress" style="--sa-progress--value:25%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;progress&quot; style=&quot;--sa-progress--value: 25%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;25&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;
        25%
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-height" class="sa-anchor"><span class="sa-anchor__body">Height<a class="sa-anchor__link" href="#article-height">#</a></span></h2>
                <p>We only set a <code>height</code> value on the <code>.progress</code>, so if you change that value the inner <code>.progress-bar</code> will automatically resize accordingly.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="progress" style="height:8px;--sa-progress--value:25%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="height:20px;--sa-progress--value:25%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;progress&quot; style=&quot;height: 8px; --sa-progress--value: 25%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;25&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;height: 20px; --sa-progress--value: 25%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;25&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-backgrounds" class="sa-anchor"><span class="sa-anchor__body">Backgrounds<a class="sa-anchor__link" href="#article-backgrounds">#</a></span></h2>
                <p>There are several different color options for the appearance of progress bars.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="progress" style="--sa-progress--value:16.666666666666664%">
                            <div class="progress-bar progress-bar-sa-primary" role="progressbar" aria-valuenow="16.666666666666664" aria-valuemin="0" aria-valuemax="100">17%</div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:33.33333333333333%">
                            <div class="progress-bar progress-bar-sa-success" role="progressbar" aria-valuenow="33.33333333333333" aria-valuemin="0" aria-valuemax="100">33%</div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:50%">
                            <div class="progress-bar progress-bar-sa-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:66.66666666666666%">
                            <div class="progress-bar progress-bar-sa-warning" role="progressbar" aria-valuenow="66.66666666666666" aria-valuemin="0" aria-valuemax="100">67%</div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:83.33333333333334%">
                            <div class="progress-bar progress-bar-sa-danger" role="progressbar" aria-valuenow="83.33333333333334" aria-valuemin="0" aria-valuemax="100">83%</div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:100%">
                            <div class="progress-bar progress-bar-sa-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;progress&quot; style=&quot;--sa-progress--value: 16.666666666666664%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;16.666666666666664&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;
        17%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 33.33333333333333%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-success&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;33.33333333333333&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;
        33%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 50%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-info&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;50&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;
        50%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 66.66666666666666%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-warning&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;66.66666666666666&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;
        67%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 83.33333333333334%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-danger&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;83.33333333333334&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;
        83%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 100%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-dark&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;100&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;
        100%
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-striped" class="sa-anchor"><span class="sa-anchor__body">Striped<a class="sa-anchor__link" href="#article-striped">#</a></span></h2>
                <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar&#x27;s background color.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="progress" style="--sa-progress--value:16.666666666666664%">
                            <div class="progress-bar progress-bar-sa-primary progress-bar-striped" role="progressbar" aria-valuenow="16.666666666666664" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:33.33333333333333%">
                            <div class="progress-bar progress-bar-sa-success progress-bar-striped" role="progressbar" aria-valuenow="33.33333333333333" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:50%">
                            <div class="progress-bar progress-bar-sa-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:66.66666666666666%">
                            <div class="progress-bar progress-bar-sa-warning progress-bar-striped" role="progressbar" aria-valuenow="66.66666666666666" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:83.33333333333334%">
                            <div class="progress-bar progress-bar-sa-danger progress-bar-striped" role="progressbar" aria-valuenow="83.33333333333334" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-4" style="--sa-progress--value:100%">
                            <div class="progress-bar progress-bar-sa-dark progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;progress&quot; style=&quot;--sa-progress--value: 16.666666666666664%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-primary progress-bar-striped&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;16.666666666666664&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 33.33333333333333%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-success progress-bar-striped&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;33.33333333333333&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 50%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-info progress-bar-striped&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;50&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 66.66666666666666%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-warning progress-bar-striped&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;66.66666666666666&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 83.33333333333334%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-danger progress-bar-striped&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;83.33333333333334&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress mt-4&quot; style=&quot;--sa-progress--value: 100%&quot;&gt;
    &lt;div
        class=&quot;progress-bar progress-bar-sa-dark progress-bar-striped&quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;100&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h2 id="article-animated-stripes" class="sa-anchor"><span class="sa-anchor__body">Animated stripes<a class="sa-anchor__link" href="#article-animated-stripes">#</a></span></h2>
                <p>The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="progress" style="--sa-progress--value:25%">
                            <div class="progress-bar progress-bar-sa-primary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;progress&quot; style=&quot;--sa-progress--value: 25%&quot;&gt;
    &lt;div
        class=&quot;
            progress-bar
            progress-bar-sa-primary
            progress-bar-striped
            progress-bar-animated
        &quot;
        role=&quot;progressbar&quot;
        aria-valuenow=&quot;25&quot;
        aria-valuemin=&quot;0&quot;
        aria-valuemax=&quot;100&quot;
    &gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->