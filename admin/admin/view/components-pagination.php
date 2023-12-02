<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Pagination</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Pagination</h1>
                <div class="sa-article__subtitle">Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.</div>
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
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-working-with-icons">Working With Icons</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-disabled-and-active-states">Disabled And Active States</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-alignment">Alignment</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>We use a large block of connected links for our pagination, making links hard to miss and easily scalable — all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping <code>&lt;nav&gt;</code> element to identify it as a navigation section to screen readers and other assistive technologies.</p>
                <p>In addition, as pages likely have more than one such navigation section, it&#x27;s advisable to provide a descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code>aria-label=&quot;Search results pages&quot;</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-sizing" class="sa-anchor"><span class="sa-anchor__body">Sizing<a class="sa-anchor__link" href="#article-sizing">#</a></span></h2>
                <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-lg">
                                <li class="page-item"><a class="page-link page-link-sa-prev" href="#" aria-label="Previous"></a></li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link-sa-next" href="#" aria-label="Next"></a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-link-sa-prev" href="#" aria-label="Previous"></a></li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link-sa-next" href="#" aria-label="Next"></a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item"><a class="page-link page-link-sa-prev" href="#" aria-label="Previous"></a></li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link-sa-next" href="#" aria-label="Next"></a></li>
                            </ul>
                        </nav>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-prev&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-next&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-prev&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-next&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-prev&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-next&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-working-with-icons" class="sa-anchor"><span class="sa-anchor__body">Working With Icons<a class="sa-anchor__link" href="#article-working-with-icons">#</a></span></h2>
                <p>Looking to use an icon in place of text for some pagination links? Be sure to provide proper screen reader support with <code>aria</code> attributes.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item"><a class="page-link page-link-sa-prev" href="#" aria-label="Previous"></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link-sa-next" href="#" aria-label="Next"></a></li>
                            </ul>
                        </nav>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-prev&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link page-link-sa-next&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-disabled-and-active-states" class="sa-anchor"><span class="sa-anchor__body">Disabled And Active States<a class="sa-anchor__link" href="#article-disabled-and-active-states">#</a></span></h2>
                <p>Pagination links are customizable for different circumstances. Use <code>.disabled</code> for links that appear un-clickable and <code>.active</code> to indicate the current page.</p>
                <p>While the <code>.disabled</code> class uses <code>pointer-events: none</code> to <em>try</em> to disable the link functionality of <code>&lt;a&gt;</code>s, that CSS property is not yet standardized and doesn&#x27;t account for keyboard navigation. As such, you should always add <code>tabindex=&quot;-1&quot;</code> on disabled links and use custom JavaScript to fully disable their functionality.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled"><a class="page-link" tabindex="-1" aria-disabled="true">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm mb-0&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-alignment" class="sa-anchor"><span class="sa-anchor__body">Alignment<a class="sa-anchor__link" href="#article-alignment">#</a></span></h2>
                <p>Change the alignment of pagination components with flexbox utilities.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled"><a class="page-link" tabindex="-1" aria-disabled="true">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm justify-content-center">
                                <li class="page-item disabled"><a class="page-link" tabindex="-1" aria-disabled="true">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm justify-content-end mb-0">
                                <li class="page-item disabled"><a class="page-link" tabindex="-1" aria-disabled="true">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm justify-content-center&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm justify-content-end mb-0&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->