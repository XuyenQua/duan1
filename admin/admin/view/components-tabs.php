<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Tabs</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Tabs</h1>
                <div class="sa-article__subtitle">Use the tab JavaScript plugin to extend navigational tabs and pills to create tabbable panes of local content.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-fill-and-justify">Fill And Justify</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-with-dropdowns">With Dropdowns</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Tabs are one of the most commonly used components for organizing content on a page. To display the current state, inside each <code>.nav-link</code> there must be an empty element with the class <code>.nav-link-sa-indicator</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="home-tab-1" data-bs-toggle="tab" data-bs-target="#home-tab-content-1" type="button" role="tab" aria-controls="home-tab-content-1" aria-selected="true">Home<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#profile-tab-content-1" type="button" role="tab" aria-controls="profile-tab-content-1" aria-selected="true">Profile<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="contact-tab-1" data-bs-toggle="tab" data-bs-target="#contact-tab-content-1" type="button" role="tab" aria-controls="contact-tab-content-1" aria-selected="true">Contact<span class="nav-link-sa-indicator"></span></button></li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="home-tab-content-1" role="tabpanel" aria-labelledby="home-tab-1">
                                <p class="mb-0">This is some placeholder content the Home tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-content-1" role="tabpanel" aria-labelledby="profile-tab-1">
                                <p class="mb-0">This is some placeholder content the Profile tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-content-1" role="tabpanel" aria-labelledby="contact-tab-1">
                                <p class="mb-0">This is some placeholder content the Contact tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link active&quot;
            id=&quot;home-tab-1&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#home-tab-content-1&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;home-tab-content-1&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Home&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link&quot;
            id=&quot;profile-tab-1&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#profile-tab-content-1&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;profile-tab-content-1&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Profile&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link&quot;
            id=&quot;contact-tab-1&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#contact-tab-content-1&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;contact-tab-content-1&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Contact&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content mt-4&quot;&gt;
    &lt;div
        class=&quot;tab-pane fade show active&quot;
        id=&quot;home-tab-content-1&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;home-tab-1&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Home tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;profile-tab-content-1&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;profile-tab-1&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Profile tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;contact-tab-content-1&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;contact-tab-1&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Contact tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <p>The same example, but inside the card.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><button class="nav-link active" id="home-tab-2" data-bs-toggle="tab" data-bs-target="#home-tab-content-2" type="button" role="tab" aria-controls="home-tab-content-2" aria-selected="true">Home<span class="nav-link-sa-indicator"></span></button></li>
                                    <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#profile-tab-content-2" type="button" role="tab" aria-controls="profile-tab-content-2" aria-selected="true">Profile<span class="nav-link-sa-indicator"></span></button></li>
                                    <li class="nav-item" role="presentation"><button class="nav-link" id="contact-tab-2" data-bs-toggle="tab" data-bs-target="#contact-tab-content-2" type="button" role="tab" aria-controls="contact-tab-content-2" aria-selected="true">Contact<span class="nav-link-sa-indicator"></span></button></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home-tab-content-2" role="tabpanel" aria-labelledby="home-tab-2">
                                        <p class="mb-0">This is some placeholder content the Home tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile-tab-content-2" role="tabpanel" aria-labelledby="profile-tab-2">
                                        <p class="mb-0">This is some placeholder content the Profile tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                    </div>
                                    <div class="tab-pane fade" id="contact-tab-content-2" role="tabpanel" aria-labelledby="contact-tab-2">
                                        <p class="mb-0">This is some placeholder content the Contact tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot; role=&quot;tablist&quot;&gt;
            &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
                &lt;button
                    class=&quot;nav-link active&quot;
                    id=&quot;home-tab-2&quot;
                    data-bs-toggle=&quot;tab&quot;
                    data-bs-target=&quot;#home-tab-content-2&quot;
                    type=&quot;button&quot;
                    role=&quot;tab&quot;
                    aria-controls=&quot;home-tab-content-2&quot;
                    aria-selected=&quot;true&quot;
                &gt;
                    Home&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
                &lt;button
                    class=&quot;nav-link&quot;
                    id=&quot;profile-tab-2&quot;
                    data-bs-toggle=&quot;tab&quot;
                    data-bs-target=&quot;#profile-tab-content-2&quot;
                    type=&quot;button&quot;
                    role=&quot;tab&quot;
                    aria-controls=&quot;profile-tab-content-2&quot;
                    aria-selected=&quot;true&quot;
                &gt;
                    Profile&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
                &lt;button
                    class=&quot;nav-link&quot;
                    id=&quot;contact-tab-2&quot;
                    data-bs-toggle=&quot;tab&quot;
                    data-bs-target=&quot;#contact-tab-content-2&quot;
                    type=&quot;button&quot;
                    role=&quot;tab&quot;
                    aria-controls=&quot;contact-tab-content-2&quot;
                    aria-selected=&quot;true&quot;
                &gt;
                    Contact&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
                &lt;/button&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div
                class=&quot;tab-pane fade show active&quot;
                id=&quot;home-tab-content-2&quot;
                role=&quot;tabpanel&quot;
                aria-labelledby=&quot;home-tab-2&quot;
            &gt;
                &lt;p class=&quot;mb-0&quot;&gt;
                    This is some placeholder content the Home tab&amp;#x27;s associated
                    content. Clicking another tab will toggle the visibility of this one
                    for the next. The tab JavaScript swaps classes to control the content
                    visibility and styling. You can use it with tabs, pills, and any other
                    &lt;code&gt;.nav&lt;/code&gt;-powered navigation.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div
                class=&quot;tab-pane fade&quot;
                id=&quot;profile-tab-content-2&quot;
                role=&quot;tabpanel&quot;
                aria-labelledby=&quot;profile-tab-2&quot;
            &gt;
                &lt;p class=&quot;mb-0&quot;&gt;
                    This is some placeholder content the Profile tab&amp;#x27;s associated
                    content. Clicking another tab will toggle the visibility of this one
                    for the next. The tab JavaScript swaps classes to control the content
                    visibility and styling. You can use it with tabs, pills, and any other
                    &lt;code&gt;.nav&lt;/code&gt;-powered navigation.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div
                class=&quot;tab-pane fade&quot;
                id=&quot;contact-tab-content-2&quot;
                role=&quot;tabpanel&quot;
                aria-labelledby=&quot;contact-tab-2&quot;
            &gt;
                &lt;p class=&quot;mb-0&quot;&gt;
                    This is some placeholder content the Contact tab&amp;#x27;s associated
                    content. Clicking another tab will toggle the visibility of this one
                    for the next. The tab JavaScript swaps classes to control the content
                    visibility and styling. You can use it with tabs, pills, and any other
                    &lt;code&gt;.nav&lt;/code&gt;-powered navigation.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-fill-and-justify" class="sa-anchor"><span class="sa-anchor__body">Fill And Justify<a class="sa-anchor__link" href="#article-fill-and-justify">#</a></span></h2>
                <p>Force your <code>.nav</code>&#x27;s contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your <code>.nav-item</code>s, use<code>.nav-fill</code>. Notice that all horizontal space is occupied, but not every nav item has the same width.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="nav nav-tabs nav-fill" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="home-tab-3" data-bs-toggle="tab" data-bs-target="#home-tab-content-3" type="button" role="tab" aria-controls="home-tab-content-3" aria-selected="true">Home<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#profile-tab-content-3" type="button" role="tab" aria-controls="profile-tab-content-3" aria-selected="true">Profile<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="much-longer-nav-link-tab-3" data-bs-toggle="tab" data-bs-target="#much-longer-nav-link-tab-content-3" type="button" role="tab" aria-controls="much-longer-nav-link-tab-content-3" aria-selected="true">Much longer nav link<span class="nav-link-sa-indicator"></span></button></li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="home-tab-content-3" role="tabpanel" aria-labelledby="home-tab-3">
                                <p class="mb-0">This is some placeholder content the Home tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-content-3" role="tabpanel" aria-labelledby="profile-tab-3">
                                <p class="mb-0">This is some placeholder content the Profile tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="much-longer-nav-link-tab-content-3" role="tabpanel" aria-labelledby="much-longer-nav-link-tab-3">
                                <p class="mb-0">This is some placeholder content the Much longer nav link tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;ul class=&quot;nav nav-tabs nav-fill&quot; role=&quot;tablist&quot;&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link active&quot;
            id=&quot;home-tab-3&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#home-tab-content-3&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;home-tab-content-3&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Home&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link&quot;
            id=&quot;profile-tab-3&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#profile-tab-content-3&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;profile-tab-content-3&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Profile&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link&quot;
            id=&quot;much-longer-nav-link-tab-3&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#much-longer-nav-link-tab-content-3&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;much-longer-nav-link-tab-content-3&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Much longer nav link&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content mt-4&quot;&gt;
    &lt;div
        class=&quot;tab-pane fade show active&quot;
        id=&quot;home-tab-content-3&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;home-tab-3&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Home tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;profile-tab-content-3&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;profile-tab-3&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Profile tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;much-longer-nav-link-tab-content-3&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;much-longer-nav-link-tab-3&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Much longer nav link tab&amp;#x27;s
            associated content. Clicking another tab will toggle the visibility of this
            one for the next. The tab JavaScript swaps classes to control the content
            visibility and styling. You can use it with tabs, pills, and any other
            &lt;code&gt;.nav&lt;/code&gt;-powered navigation.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <p>For equal-width elements, use <code>.nav-justified</code>. All horizontal space will be occupied by nav links, but unlike the <code>.nav-fill</code> above, every nav item will be the same width.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="home-tab-4" data-bs-toggle="tab" data-bs-target="#home-tab-content-4" type="button" role="tab" aria-controls="home-tab-content-4" aria-selected="true">Home<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#profile-tab-content-4" type="button" role="tab" aria-controls="profile-tab-content-4" aria-selected="true">Profile<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="much-longer-nav-link-tab-4" data-bs-toggle="tab" data-bs-target="#much-longer-nav-link-tab-content-4" type="button" role="tab" aria-controls="much-longer-nav-link-tab-content-4" aria-selected="true">Much longer nav link<span class="nav-link-sa-indicator"></span></button></li>
                        </ul>
                        <div class="tab-content mt-5">
                            <div class="tab-pane fade show active" id="home-tab-content-4" role="tabpanel" aria-labelledby="home-tab-4">
                                <p class="mb-0">This is some placeholder content the Home tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-content-4" role="tabpanel" aria-labelledby="profile-tab-4">
                                <p class="mb-0">This is some placeholder content the Profile tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="much-longer-nav-link-tab-content-4" role="tabpanel" aria-labelledby="much-longer-nav-link-tab-4">
                                <p class="mb-0">This is some placeholder content the Much longer nav link tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;ul class=&quot;nav nav-tabs nav-justified&quot; role=&quot;tablist&quot;&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link active&quot;
            id=&quot;home-tab-4&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#home-tab-content-4&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;home-tab-content-4&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Home&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link&quot;
            id=&quot;profile-tab-4&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#profile-tab-content-4&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;profile-tab-content-4&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Profile&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link&quot;
            id=&quot;much-longer-nav-link-tab-4&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#much-longer-nav-link-tab-content-4&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;much-longer-nav-link-tab-content-4&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Much longer nav link&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content mt-5&quot;&gt;
    &lt;div
        class=&quot;tab-pane fade show active&quot;
        id=&quot;home-tab-content-4&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;home-tab-4&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Home tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;profile-tab-content-4&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;profile-tab-4&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Profile tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;much-longer-nav-link-tab-content-4&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;much-longer-nav-link-tab-4&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Much longer nav link tab&amp;#x27;s
            associated content. Clicking another tab will toggle the visibility of this
            one for the next. The tab JavaScript swaps classes to control the content
            visibility and styling. You can use it with tabs, pills, and any other
            &lt;code&gt;.nav&lt;/code&gt;-powered navigation.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-with-dropdowns" class="sa-anchor"><span class="sa-anchor__body">With Dropdowns<a class="sa-anchor__link" href="#article-with-dropdowns">#</a></span></h2>
                <p>Add dropdown menus with a little extra HTML and the dropdowns JavaScript plugin.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="home-tab-5" data-bs-toggle="tab" data-bs-target="#home-tab-content-5" type="button" role="tab" aria-controls="home-tab-content-5" aria-selected="true">Home<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab-5" data-bs-toggle="tab" data-bs-target="#profile-tab-content-5" type="button" role="tab" aria-controls="profile-tab-content-5" aria-selected="true">Profile<span class="nav-link-sa-indicator"></span></button></li>
                            <li class="nav-item dropdown" role="presentation"><button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" aria-expanded="false">Dropdown<span class="nav-link-sa-indicator"></span></button>
                                <ul class="dropdown-menu">
                                    <li><button class="dropdown-item" id="contact-tab-5" data-bs-toggle="tab" data-bs-target="#contact-tab-content-5" type="button" role="tab" aria-controls="contact-tab-content-5" aria-selected="false">Contact</button></li>
                                    <li><button class="dropdown-item" id="address-tab-5" data-bs-toggle="tab" data-bs-target="#address-tab-content-5" type="button" role="tab" aria-controls="address-tab-content-5" aria-selected="false">Address</button></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="home-tab-content-5" role="tabpanel" aria-labelledby="home-tab-5">
                                <p class="mb-0">This is some placeholder content the Home tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-content-5" role="tabpanel" aria-labelledby="profile-tab-5">
                                <p class="mb-0">This is some placeholder content the Profile tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-content-5" role="tabpanel" aria-labelledby="contact-tab-5">
                                <p class="mb-0">This is some placeholder content the Contact tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="address-tab-content-5" role="tabpanel" aria-labelledby="address-tab-5">
                                <p class="mb-0">This is some placeholder content the Address tab&#x27;s associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link active&quot;
            id=&quot;home-tab-5&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#home-tab-content-5&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;home-tab-content-5&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Home&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link&quot;
            id=&quot;profile-tab-5&quot;
            data-bs-toggle=&quot;tab&quot;
            data-bs-target=&quot;#profile-tab-content-5&quot;
            type=&quot;button&quot;
            role=&quot;tab&quot;
            aria-controls=&quot;profile-tab-content-5&quot;
            aria-selected=&quot;true&quot;
        &gt;
            Profile&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item dropdown&quot; role=&quot;presentation&quot;&gt;
        &lt;button
            class=&quot;nav-link dropdown-toggle&quot;
            data-bs-toggle=&quot;dropdown&quot;
            data-bs-offset=&quot;0,0&quot;
            aria-expanded=&quot;false&quot;
        &gt;
            Dropdown&lt;span class=&quot;nav-link-sa-indicator&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;
                &lt;button
                    class=&quot;dropdown-item&quot;
                    id=&quot;contact-tab-5&quot;
                    data-bs-toggle=&quot;tab&quot;
                    data-bs-target=&quot;#contact-tab-content-5&quot;
                    type=&quot;button&quot;
                    role=&quot;tab&quot;
                    aria-controls=&quot;contact-tab-content-5&quot;
                    aria-selected=&quot;false&quot;
                &gt;
                    Contact
                &lt;/button&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;button
                    class=&quot;dropdown-item&quot;
                    id=&quot;address-tab-5&quot;
                    data-bs-toggle=&quot;tab&quot;
                    data-bs-target=&quot;#address-tab-content-5&quot;
                    type=&quot;button&quot;
                    role=&quot;tab&quot;
                    aria-controls=&quot;address-tab-content-5&quot;
                    aria-selected=&quot;false&quot;
                &gt;
                    Address
                &lt;/button&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content mt-4&quot;&gt;
    &lt;div
        class=&quot;tab-pane fade show active&quot;
        id=&quot;home-tab-content-5&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;home-tab-5&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Home tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;profile-tab-content-5&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;profile-tab-5&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Profile tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;contact-tab-content-5&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;contact-tab-5&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Contact tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;address-tab-content-5&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;address-tab-5&quot;
    &gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            This is some placeholder content the Address tab&amp;#x27;s associated content.
            Clicking another tab will toggle the visibility of this one for the next. The
            tab JavaScript swaps classes to control the content visibility and styling.
            You can use it with tabs, pills, and any other &lt;code&gt;.nav&lt;/code&gt;-powered
            navigation.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->