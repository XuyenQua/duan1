<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">List Group</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">List Group</h1>
                <div class="sa-article__subtitle">List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-active-items">Active Items</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-disabled-items">Disabled Items</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-links-and-buttons">Links And Buttons</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-flush">Flush</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-with-badges">With Badges</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-custom-content">Custom Content</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-checkboxes-and-radios">Checkboxes And Radios</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;An item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A fourth item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-active-items" class="sa-anchor"><span class="sa-anchor__body">Active Items<a class="sa-anchor__link" href="#article-active-items">#</a></span></h2>
                <p>Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true">An active item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item active&quot; aria-current=&quot;true&quot;&gt;An active item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A fourth item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-disabled-items" class="sa-anchor"><span class="sa-anchor__body">Disabled Items<a class="sa-anchor__link" href="#article-disabled-items">#</a></span></h2>
                <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled. Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully disable their click events (e.g., links).</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="list-group">
                            <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item disabled&quot; aria-disabled=&quot;true&quot;&gt;A disabled item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A fourth item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-links-and-buttons" class="sa-anchor"><span class="sa-anchor__body">Links And Buttons<a class="sa-anchor__link" href="#article-links-and-buttons">#</a></span></h2>
                <p>Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s or <code>&lt;div&gt;</code>s) don&#x27;t provide a click or tap affordance.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="list-group"><a href="#" class="list-group-item list-group-item-action active" aria-current="true">The current link item</a><a href="#" class="list-group-item list-group-item-action">A second link item</a><a href="#" class="list-group-item list-group-item-action">A third link item</a><a href="#" class="list-group-item list-group-item-action">A fourth link item</a><a class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;list-group&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot; aria-current=&quot;true&quot;
        &gt;The current link item&lt;/a
    &gt;&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A second link item&lt;/a
    &gt;&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A third link item&lt;/a
    &gt;&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A fourth link item&lt;/a
    &gt;&lt;a
        class=&quot;list-group-item list-group-item-action disabled&quot;
        tabindex=&quot;-1&quot;
        aria-disabled=&quot;true&quot;
        &gt;A disabled link item&lt;/a
    &gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <p>With <code>&lt;button&gt;</code>s, you can also make use of the <code>disabled</code> attribute instead of the <code>.disabled</code> class. Sadly, <code>&lt;a&gt;</code>s don&#x27;t support the disabled attribute.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="list-group"><button type="button" class="list-group-item list-group-item-action active" aria-current="true">The current button</button><button type="button" class="list-group-item list-group-item-action">A second item</button><button type="button" class="list-group-item list-group-item-action">A third button item</button><button type="button" class="list-group-item list-group-item-action">A fourth button item</button><button type="button" class="list-group-item list-group-item-action" disabled="">A disabled button item</button></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;list-group&quot;&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;list-group-item list-group-item-action active&quot;
        aria-current=&quot;true&quot;
    &gt;
        The current button&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
        A second item&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
        A third button item&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
        A fourth button item&lt;/button
    &gt;&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot; disabled=&quot;&quot;&gt;
        A disabled button item
    &lt;/button&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h2 id="article-flush" class="sa-anchor"><span class="sa-anchor__body">Flush<a class="sa-anchor__link" href="#article-flush">#</a></span></h2>
                <p>Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;ul class=&quot;list-group list-group-flush&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;An item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;A fourth item&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h2 id="article-with-badges" class="sa-anchor"><span class="sa-anchor__body">With Badges<a class="sa-anchor__link" href="#article-with-badges">#</a></span></h2>
                <p>Add badges to any list group item to show unread counts, activity, and more with the help of some <a href="https://getbootstrap.com/docs/5.0/utilities/flex/">utilities</a>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">A list item<span class="badge badge-sa-primary badge-sa-pill">14</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">A second list item<span class="badge badge-sa-primary badge-sa-pill">2</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">A third list item<span class="badge badge-sa-primary badge-sa-pill">1</span></li>
                        </ul>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        A list item&lt;span class=&quot;badge badge-sa-primary badge-sa-pill&quot;&gt;14&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        A second list item&lt;span class=&quot;badge badge-sa-primary badge-sa-pill&quot;&gt;2&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        A third list item&lt;span class=&quot;badge badge-sa-primary badge-sa-pill&quot;&gt;1&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
                <h2 id="article-custom-content" class="sa-anchor"><span class="sa-anchor__body">Custom Content<a class="sa-anchor__link" href="#article-custom-content">#</a></span></h2>
                <p>Add nearly any HTML within, even for linked list groups like the one below, with the help of <a href="https://getbootstrap.com/docs/5.0/utilities/flex/">flexbox utilities</a>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="list-group"><a href="#" class="list-group-item list-group-item-action py-4 active" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-2">List group item heading</h5><small>3 days ago</small>
                                </div>
                                <p class="mb-2">Some placeholder content in a paragraph.</p><small>And some small print.</small>
                            </a><a href="#" class="list-group-item list-group-item-action py-4">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-2">List group item heading</h5><small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-2">Some placeholder content in a paragraph.</p><small class="text-muted">And some muted small print.</small>
                            </a><a href="#" class="list-group-item list-group-item-action py-4">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-2">List group item heading</h5><small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-2">Some placeholder content in a paragraph.</p><small class="text-muted">And some muted small print.</small>
                            </a></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    <div class="sa-example__code collapse" id="example-8">
                        <pre><code class="language-html">&lt;div class=&quot;list-group&quot;&gt;
    &lt;a
        href=&quot;#&quot;
        class=&quot;list-group-item list-group-item-action py-4 active&quot;
        aria-current=&quot;true&quot;
        &gt;&lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
            &lt;h5 class=&quot;mb-2&quot;&gt;List group item heading&lt;/h5&gt;
            &lt;small&gt;3 days ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Some placeholder content in a paragraph.&lt;/p&gt;
        &lt;small&gt;And some small print.&lt;/small&gt;&lt;/a
    &gt;&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action py-4&quot;
        &gt;&lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
            &lt;h5 class=&quot;mb-2&quot;&gt;List group item heading&lt;/h5&gt;
            &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Some placeholder content in a paragraph.&lt;/p&gt;
        &lt;small class=&quot;text-muted&quot;&gt;And some muted small print.&lt;/small&gt;&lt;/a
    &gt;&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action py-4&quot;
        &gt;&lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
            &lt;h5 class=&quot;mb-2&quot;&gt;List group item heading&lt;/h5&gt;
            &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Some placeholder content in a paragraph.&lt;/p&gt;
        &lt;small class=&quot;text-muted&quot;&gt;And some muted small print.&lt;/small&gt;&lt;/a
    &gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    </div>
                </div>
                <h2 id="article-checkboxes-and-radios" class="sa-anchor"><span class="sa-anchor__body">Checkboxes And Radios<a class="sa-anchor__link" href="#article-checkboxes-and-radios">#</a></span></h2>
                <p>Place Bootstrap&#x27;s checkboxes and radios within list group items and customize as needed.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="list-group"><label class="list-group-item"><input type="checkbox" class="form-check-input me-4" value="" />First checkbox</label><label class="list-group-item"><input type="checkbox" class="form-check-input me-4" value="" />Second checkbox</label><label class="list-group-item"><input type="checkbox" class="form-check-input me-4" value="" />Third checkbox</label><label class="list-group-item"><input type="checkbox" class="form-check-input me-4" value="" />Fourth checkbox</label><label class="list-group-item"><input type="checkbox" class="form-check-input me-4" value="" />Fifth checkbox</label></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    <div class="sa-example__code collapse" id="example-9">
                        <pre><code class="language-html">&lt;div class=&quot;list-group&quot;&gt;
    &lt;label class=&quot;list-group-item&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input me-4&quot; value=&quot;&quot; /&gt;First
        checkbox&lt;/label
    &gt;&lt;label class=&quot;list-group-item&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input me-4&quot; value=&quot;&quot; /&gt;Second
        checkbox&lt;/label
    &gt;&lt;label class=&quot;list-group-item&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input me-4&quot; value=&quot;&quot; /&gt;Third
        checkbox&lt;/label
    &gt;&lt;label class=&quot;list-group-item&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input me-4&quot; value=&quot;&quot; /&gt;Fourth
        checkbox&lt;/label
    &gt;&lt;label class=&quot;list-group-item&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input me-4&quot; value=&quot;&quot; /&gt;Fifth
        checkbox&lt;/label
    &gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->