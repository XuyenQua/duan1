<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Placeholders</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Placeholders</h1>
                <div class="sa-article__subtitle">Use loading placeholders for your components or pages to indicate something may still be loading.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-how-it-works">How it works</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-width">Width</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-color">Color</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-sizing">Sizing</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-animation">Animation</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>In the example below, we take a typical card component and recreate it with placeholders applied to create a &quot;loading card&quot;. Size and proportions are the same between the two.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row">
                            <div class="col">
                                <div class="card"><svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#20c997"></rect>
                                    </svg>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card w-20x" aria-hidden="true"><svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                    </svg>
                                    <div class="card-body">
                                        <div class="h5 card-title placeholder-glow"><span class="placeholder col-6"></span></div>
                                        <p class="card-text placeholder-glow"><span class="placeholder col-7"></span><span class="placeholder col-4"></span><span class="placeholder col-4"></span><span class="placeholder col-6"></span><span class="placeholder col-8"></span></p><a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;card&quot;&gt;
            &lt;svg
                class=&quot;bd-placeholder-img card-img-top&quot;
                width=&quot;100%&quot;
                height=&quot;180&quot;
                xmlns=&quot;http://www.w3.org/2000/svg&quot;
                role=&quot;img&quot;
                aria-label=&quot;Placeholder&quot;
                preserveAspectRatio=&quot;xMidYMid slice&quot;
                focusable=&quot;false&quot;
            &gt;
                &lt;title&gt;Placeholder&lt;/title&gt;
                &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#20c997&quot;&gt;&lt;/rect&gt;
            &lt;/svg&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
                &lt;p class=&quot;card-text&quot;&gt;
                    Some quick example text to build on the card title and make up the
                    bulk of the card&amp;#x27;s content.
                &lt;/p&gt;
                &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;card w-20x&quot; aria-hidden=&quot;true&quot;&gt;
            &lt;svg
                class=&quot;bd-placeholder-img card-img-top&quot;
                width=&quot;100%&quot;
                height=&quot;180&quot;
                xmlns=&quot;http://www.w3.org/2000/svg&quot;
                role=&quot;img&quot;
                aria-label=&quot;Placeholder&quot;
                preserveAspectRatio=&quot;xMidYMid slice&quot;
                focusable=&quot;false&quot;
            &gt;
                &lt;title&gt;Placeholder&lt;/title&gt;
                &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#868e96&quot;&gt;&lt;/rect&gt;
            &lt;/svg&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;h5 card-title placeholder-glow&quot;&gt;
                    &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
                &lt;/div&gt;
                &lt;p class=&quot;card-text placeholder-glow&quot;&gt;
                    &lt;span class=&quot;placeholder col-7&quot;&gt;&lt;/span
                    &gt;&lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span
                    &gt;&lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span
                    &gt;&lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span
                    &gt;&lt;span class=&quot;placeholder col-8&quot;&gt;&lt;/span&gt;
                &lt;/p&gt;
                &lt;a
                    href=&quot;#&quot;
                    tabindex=&quot;-1&quot;
                    class=&quot;btn btn-primary disabled placeholder col-6&quot;
                &gt;&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-how-it-works" class="sa-anchor"><span class="sa-anchor__body">How it works<a class="sa-anchor__link" href="#article-how-it-works">#</a></span></h2>
                <p>Create placeholders with the <code>.placeholder</code> class and a grid column class (e.g., <code>.col-6</code>) to set the <code>width</code>. They can replace the text inside an element or as be added as a modifier class to an existing component.</p>
                <p>We apply additional styling to <code>.btn</code>s via <code>::before</code> to ensure the <code>height</code> is respected. You may extend this pattern for other situations as needed, or add a <code>&amp;nbsp;</code> within the element to reflect the height when actual text is rendered in its place.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <p aria-hidden="true"><span class="placeholder col-6"></span></p><a href="#" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;p aria-hidden=&quot;true&quot;&gt;&lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;&lt;/p&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-primary disabled placeholder col-4&quot; aria-hidden=&quot;true&quot;&gt;&lt;/a&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-width" class="sa-anchor"><span class="sa-anchor__body">Width<a class="sa-anchor__link" href="#article-width">#</a></span></h2>
                <p>You can change the <code>width</code> through grid column classes, width utilities, or inline styles.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div><span class="placeholder col-6"></span></div>
                        <div><span class="placeholder w-75"></span></div>
                        <div><span class="placeholder" style="width:25%"></span></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div&gt;&lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder w-75&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder&quot; style=&quot;width: 25%&quot;&gt;&lt;/span&gt;&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-color" class="sa-anchor"><span class="sa-anchor__body">Color<a class="sa-anchor__link" href="#article-color">#</a></span></h2>
                <p>By default, the <code>placeholder</code> uses <code>currentColor</code>. This can be overriden with a custom color or utility class.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div><span class="placeholder col-12"></span></div>
                        <div><span class="placeholder col-12 bg-primary"></span></div>
                        <div><span class="placeholder col-12 bg-secondary"></span></div>
                        <div><span class="placeholder col-12 bg-success"></span></div>
                        <div><span class="placeholder col-12 bg-danger"></span></div>
                        <div><span class="placeholder col-12 bg-warning"></span></div>
                        <div><span class="placeholder col-12 bg-info"></span></div>
                        <div><span class="placeholder col-12 bg-light"></span></div>
                        <div><span class="placeholder col-12 bg-dark"></span></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div&gt;&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-primary&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-secondary&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-success&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-danger&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-warning&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-info&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-light&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 bg-dark&quot;&gt;&lt;/span&gt;&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-sizing" class="sa-anchor"><span class="sa-anchor__body">Sizing<a class="sa-anchor__link" href="#article-sizing">#</a></span></h2>
                <p>The size of <code>.placeholder</code>s are based on the typographic style of the parent element. Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or <code>.placeholder-xs</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div><span class="placeholder col-12 placeholder-lg"></span></div>
                        <div><span class="placeholder col-12"></span></div>
                        <div><span class="placeholder col-12 placeholder-sm"></span></div>
                        <div><span class="placeholder col-12 placeholder-xs"></span></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div&gt;&lt;span class=&quot;placeholder col-12 placeholder-lg&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 placeholder-sm&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span class=&quot;placeholder col-12 placeholder-xs&quot;&gt;&lt;/span&gt;&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h2 id="article-animation" class="sa-anchor"><span class="sa-anchor__body">Animation<a class="sa-anchor__link" href="#article-animation">#</a></span></h2>
                <p>Animate placeholders with <code>.placeholder-glow</code> or <code>.placeholder-wave</code> to better convey the perception of something being <em>actively</em> loaded.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <p class="placeholder-glow"><span class="placeholder col-12"></span></p>
                        <p class="placeholder-wave"><span class="placeholder col-12"></span></p>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;p class=&quot;placeholder-glow&quot;&gt;&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;placeholder-wave&quot;&gt;&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;&lt;/p&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->