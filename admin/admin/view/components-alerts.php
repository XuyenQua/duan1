<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Alerts</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Alerts</h1>
                <div class="sa-article__subtitle">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-colors">Colors</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-link-color">Link Color</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-icons">Icons</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-advanced-content">Advanced Content</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-dismissing">Dismissing</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-card-style">Card Style</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>A basic alert is usually just a highlighted area containing an informational message. Scroll down the page to learn about other alert options.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="alert alert-info mb-0" role="alert">Hi, I&#x27;m a simple alert example. Scroll down to see what I can.</div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;alert alert-info mb-0&quot; role=&quot;alert&quot;&gt;
    Hi, I&amp;#x27;m a simple alert example. Scroll down to see what I can.
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-colors" class="sa-anchor"><span class="sa-anchor__body">Colors<a class="sa-anchor__link" href="#article-colors">#</a></span></h2>
                <p>There are a total of eight color options available. Choose a color that matches the context of the alert.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="alert alert-success" role="alert">A simple success alert — check it out!</div>
                        <div class="alert alert-danger" role="alert">A simple danger alert — check it out!</div>
                        <div class="alert alert-warning" role="alert">A simple warning alert — check it out!</div>
                        <div class="alert alert-info" role="alert">A simple info alert — check it out!</div>
                        <div class="alert alert-primary" role="alert">A simple primary alert — check it out!</div>
                        <div class="alert alert-secondary" role="alert">A simple secondary alert — check it out!</div>
                        <div class="alert alert-dark" role="alert">A simple dark alert — check it out!</div>
                        <div class="alert alert-light mb-0" role="alert">A simple light alert — check it out!</div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;A simple success alert — check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;A simple danger alert — check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;A simple warning alert — check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;A simple info alert — check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;A simple primary alert — check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
    A simple secondary alert — check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;A simple dark alert — check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-light mb-0&quot; role=&quot;alert&quot;&gt;
    A simple light alert — check it out!
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-link-color" class="sa-anchor"><span class="sa-anchor__body">Link Color<a class="sa-anchor__link" href="#article-link-color">#</a></span></h2>
                <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="alert alert-success" role="alert">A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                        <div class="alert alert-danger" role="alert">A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                        <div class="alert alert-warning" role="alert">A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                        <div class="alert alert-info" role="alert">A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                        <div class="alert alert-primary" role="alert">A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                        <div class="alert alert-secondary" role="alert">A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                        <div class="alert alert-dark" role="alert">A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                        <div class="alert alert-light mb-0" role="alert">A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
    A simple success alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give
    it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
    A simple danger alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it
    a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
    A simple warning alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give
    it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
    A simple info alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a
    click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
    A simple primary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give
    it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
    A simple secondary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give
    it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
    A simple dark alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a
    click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-light mb-0&quot; role=&quot;alert&quot;&gt;
    A simple light alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it
    a click if you like.
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-icons" class="sa-anchor"><span class="sa-anchor__body">Icons<a class="sa-anchor__link" href="#article-icons">#</a></span></h2>
                <p>Use the <code>.alert-sa-has-icon</code>, <code>.alert-sa-icon</code>, and <code>.alert-sa-content</code> classes to add an icon to the alert.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="alert alert-primary mb-0 alert-sa-has-icon" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple alert with icon.</div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div class=&quot;alert alert-primary mb-0 alert-sa-has-icon&quot; role=&quot;alert&quot;&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;A simple alert with icon.&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-advanced-content" class="sa-anchor"><span class="sa-anchor__body">Advanced Content<a class="sa-anchor__link" href="#article-advanced-content">#</a></span></h2>
                <p>Alerts can contain not only just text, but also a composition of headings, paragraphs, etc.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="alert alert-success mb-0" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr />
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div class=&quot;alert alert-success mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
    &lt;p&gt;
        Aww yeah, you successfully read this important alert message. This example text is
        going to run a bit longer so that you can see how spacing within an alert works
        with this kind of content.
    &lt;/p&gt;
    &lt;hr /&gt;
    &lt;p class=&quot;mb-0&quot;&gt;
        Whenever you need to, be sure to use margin utilities to keep things nice and
        tidy.
    &lt;/p&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h2 id="article-dismissing" class="sa-anchor"><span class="sa-anchor__body">Dismissing<a class="sa-anchor__link" href="#article-dismissing">#</a></span></h2>
                <p>You can let the user dismiss the alert, see the example below:</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="alert alert-warning mb-0 alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> You should check in on some of those fields below. <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;alert alert-warning mb-0 alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
    &lt;strong&gt;Holy guacamole!&lt;/strong&gt; You should check in on some of those fields below.
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h2 id="article-card-style" class="sa-anchor"><span class="sa-anchor__body">Card Style<a class="sa-anchor__link" href="#article-card-style">#</a></span></h2>
                <p>You can also use an alternate card-like alert style. Just change the style class to the <code>.alert-sa-*-card</code> format.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="alert alert-sa-success-card alert-sa-has-icon alert-dismissible fade show" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-sa-danger-card alert-sa-has-icon alert-dismissible fade show" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-sa-warning-card alert-sa-has-icon alert-dismissible fade show" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-sa-info-card alert-sa-has-icon alert-dismissible fade show" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-sa-primary-card alert-sa-has-icon alert-dismissible fade show" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-sa-secondary-card alert-sa-has-icon alert-dismissible fade show" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-sa-dark-card alert-sa-has-icon alert-dismissible fade show" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-sa-light-card alert-sa-has-icon alert-dismissible fade show mb-0" role="alert">
                            <div class="alert-sa-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg></div>
                            <div class="alert-sa-content">A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div><button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;div
    class=&quot;alert alert-sa-success-card alert-sa-has-icon alert-dismissible fade show&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple success alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div
    class=&quot;alert alert-sa-danger-card alert-sa-has-icon alert-dismissible fade show&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple danger alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div
    class=&quot;alert alert-sa-warning-card alert-sa-has-icon alert-dismissible fade show&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple warning alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div
    class=&quot;alert alert-sa-info-card alert-sa-has-icon alert-dismissible fade show&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple info alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give
        it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div
    class=&quot;alert alert-sa-primary-card alert-sa-has-icon alert-dismissible fade show&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple primary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div
    class=&quot;alert alert-sa-secondary-card alert-sa-has-icon alert-dismissible fade show&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple secondary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;.
        Give it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div
    class=&quot;alert alert-sa-dark-card alert-sa-has-icon alert-dismissible fade show&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple dark alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give
        it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div
    class=&quot;alert alert-sa-light-card alert-sa-has-icon alert-dismissible fade show mb-0&quot;
    role=&quot;alert&quot;
&gt;
    &lt;div class=&quot;alert-sa-icon&quot;&gt;
        &lt;svg
            xmlns=&quot;http://www.w3.org/2000/svg&quot;
            width=&quot;1em&quot;
            height=&quot;1em&quot;
            viewBox=&quot;0 0 24 24&quot;
            fill=&quot;none&quot;
            stroke=&quot;currentColor&quot;
            stroke-width=&quot;2&quot;
            stroke-linecap=&quot;round&quot;
            stroke-linejoin=&quot;round&quot;
            class=&quot;feather feather-info&quot;
        &gt;
            &lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;16&quot; x2=&quot;12&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;
            &lt;line x1=&quot;12&quot; y1=&quot;8&quot; x2=&quot;12.01&quot; y2=&quot;8&quot;&gt;&lt;/line&gt;
        &lt;/svg&gt;
    &lt;/div&gt;
    &lt;div class=&quot;alert-sa-content&quot;&gt;
        A simple light alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give
        it a click if you like.
    &lt;/div&gt;
    &lt;button
        type=&quot;button&quot;
        class=&quot;sa-close&quot;
        data-bs-dismiss=&quot;alert&quot;
        aria-label=&quot;Close&quot;
    &gt;&lt;/button&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->