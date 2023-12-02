<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Charts</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Charts</h1>
                <div class="sa-article__subtitle">The template uses the Chart.js library to draw charts. It provides a simple yet flexible JavaScript charting for designers and developers.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-line">Line</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-line-area">Line Area</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-vertical-bar">Vertical Bar</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-horizontal-bar">Horizontal Bar</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-stacked-bar">Stacked Bar</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-pie">Pie</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-doughnut">Doughnut</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-line" class="sa-anchor"><span class="sa-anchor__body">Line<a class="sa-anchor__link" href="#article-line">#</a></span></h2>
                <p>A line chart is a way of plotting data points on a line. Often, it is used to show trend data, or the comparison of two data sets.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body"><canvas id="example-chart-js-line"></canvas></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;&lt;canvas id=&quot;example-chart-js-line&quot;&gt;&lt;/canvas&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-line-area" class="sa-anchor"><span class="sa-anchor__body">Line Area<a class="sa-anchor__link" href="#article-line-area">#</a></span></h2>
                <p>Line charts support a fill option on the dataset object which can be used to create area between two datasets or a dataset and a boundary.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body"><canvas id="example-chart-js-line-area"></canvas></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;&lt;canvas id=&quot;example-chart-js-line-area&quot;&gt;&lt;/canvas&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-vertical-bar" class="sa-anchor"><span class="sa-anchor__body">Vertical Bar<a class="sa-anchor__link" href="#article-vertical-bar">#</a></span></h2>
                <p>A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets side by side.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body"><canvas id="example-chart-js-vertical-bar"></canvas></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;&lt;canvas id=&quot;example-chart-js-vertical-bar&quot;&gt;&lt;/canvas&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-horizontal-bar" class="sa-anchor"><span class="sa-anchor__body">Horizontal Bar<a class="sa-anchor__link" href="#article-horizontal-bar">#</a></span></h2>
                <p>A horizontal bar chart is a variation on a vertical bar chart. It is sometimes used to show trend data, and the comparison of multiple data sets side by side.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body"><canvas id="example-chart-js-horizontal-bar"></canvas></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;&lt;canvas id=&quot;example-chart-js-horizontal-bar&quot;&gt;&lt;/canvas&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-stacked-bar" class="sa-anchor"><span class="sa-anchor__body">Stacked Bar<a class="sa-anchor__link" href="#article-stacked-bar">#</a></span></h2>
                <p>Bar charts can be configured into stacked bar charts by changing the settings on the X and Y axes to enable stacking. Stacked bar charts can be used to show how one data series is made up of a number of smaller pieces.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body"><canvas id="example-chart-js-stacked-bar"></canvas></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;&lt;canvas id=&quot;example-chart-js-stacked-bar&quot;&gt;&lt;/canvas&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h2 id="article-pie" class="sa-anchor"><span class="sa-anchor__body">Pie<a class="sa-anchor__link" href="#article-pie">#</a></span></h2>
                <p>Pie chart are probably the most commonly used chart. It is divided into segments, the arc of each segment shows the proportional value of each piece of data.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body"><canvas id="example-chart-js-pie" class="max-h-20x"></canvas></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;canvas id=&quot;example-chart-js-pie&quot; class=&quot;max-h-20x&quot;&gt;&lt;/canvas&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h2 id="article-doughnut" class="sa-anchor"><span class="sa-anchor__body">Doughnut<a class="sa-anchor__link" href="#article-doughnut">#</a></span></h2>
                <p>Doughnut is another popular type of pie chart.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-body"><canvas id="example-chart-js-doughnut" class="max-h-20x"></canvas></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;canvas id=&quot;example-chart-js-doughnut&quot; class=&quot;max-h-20x&quot;&gt;&lt;/canvas&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->