 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="sa-article sa-article--has-toc">
         <div class="sa-article__container container container--max--md">
             <div class="sa-article__header">
                 <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                     <ol class="breadcrumb breadcrumb-sa-simple">
                         <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Components</li>
                         <li class="breadcrumb-item active" aria-current="page">Toasts</li>
                     </ol>
                 </nav>
                 <h1 class="sa-article__title">Toasts</h1>
                 <div class="sa-article__subtitle">Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.</div>
             </div>
             <div class="sa-toc sa-article__toc">
                 <div class="sa-toc__container">
                     <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                     <ul class="sa-toc__list">
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-live">Live</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-stacking">Stacking</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-custom-content">Custom content</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-color-schemes">Color schemes</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-placement">Placement</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="sa-article__content">
                 <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                 <p>To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use <code>display: flex</code>, allowing easy alignment of content thanks to our margin and flexbox utilities.</p>
                 <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your &quot;toasted&quot; content and strongly encourage a dismiss button.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                             <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                 <div class="me-auto fw-medium">Bootstrap</div><small class="text-muted">11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                             </div>
                             <div class="toast-body">Hello, world! This is a toast message.</div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                     <div class="sa-example__code collapse" id="example-1">
                         <pre><code class="language-html">&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
        &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
        &lt;small class=&quot;text-muted&quot;&gt;11 mins ago&lt;/small
        &gt;&lt;button
            type=&quot;button&quot;
            class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
            data-bs-dismiss=&quot;toast&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-live" class="sa-anchor"><span class="sa-anchor__body">Live<a class="sa-anchor__link" href="#article-live">#</a></span></h2>
                 <p>Click the button below to show a toast (positioned with our utilities in the lower right corner) that has been hidden by default with <code>.hide</code>.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body"><button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
                         <div class="toast fade hide" data-bs-autohide="false" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast">
                             <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                 <div class="me-auto fw-medium">Bootstrap</div><small class="text-muted">11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                             </div>
                             <div class="toast-body">Hello, world! This is a toast message.</div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                     <div class="sa-example__code collapse" id="example-2">
                         <pre><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveToastBtn&quot;&gt;Show live toast&lt;/button&gt;
&lt;div
    class=&quot;toast fade hide&quot;
    data-bs-autohide=&quot;false&quot;
    role=&quot;alert&quot;
    aria-live=&quot;assertive&quot;
    aria-atomic=&quot;true&quot;
    id=&quot;liveToast&quot;
&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
        &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
        &lt;small class=&quot;text-muted&quot;&gt;11 mins ago&lt;/small
        &gt;&lt;button
            type=&quot;button&quot;
            class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
            data-bs-dismiss=&quot;toast&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-stacking" class="sa-anchor"><span class="sa-anchor__body">Stacking<a class="sa-anchor__link" href="#article-stacking">#</a></span></h2>
                 <p>You can stack toasts by wrapping them in a toast container, which will vertically add some spacing.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="toast-container">
                             <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small class="text-muted">11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small class="text-muted">11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                     <div class="sa-example__code collapse" id="example-3">
                         <pre><code class="language-html">&lt;div class=&quot;toast-container&quot;&gt;
    &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small class=&quot;text-muted&quot;&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small class=&quot;text-muted&quot;&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-custom-content" class="sa-anchor"><span class="sa-anchor__body">Custom content<a class="sa-anchor__link" href="#article-custom-content">#</a></span></h2>
                 <p>Customize your toasts by removing sub-components, tweaking them with utilities, or by adding your own markup. Here we&#x27;ve created a simpler toast by removing the default <code>.toast-header</code>, adding a custom hide button, and using some flexbox utilities to adjust the layout.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="toast fade show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                             <div class="d-flex">
                                 <div class="toast-body">Hello, world! This is a toast message.</div><button type="button" class="sa-close m-2 ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                             </div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                     <div class="sa-example__code collapse" id="example-4">
                         <pre><code class="language-html">&lt;div
    class=&quot;toast fade show align-items-center&quot;
    role=&quot;alert&quot;
    aria-live=&quot;assertive&quot;
    aria-atomic=&quot;true&quot;
&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;sa-close m-2 ms-auto&quot;
            data-bs-dismiss=&quot;toast&quot;
            aria-label=&quot;Close&quot;
        &gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                     </div>
                 </div>
                 <p>Alternatively, you can also add additional controls and components to toasts.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                             <div class="toast-body">
                                 <div class="pb-2">Hello, world! This is a toast message.</div>
                                 <div class="mt-3 pt-4 border-top"><button type="button" class="btn btn-primary btn-sm">Take action</button><button type="button" class="btn btn-secondary btn-sm ms-3" data-bs-dismiss="toast">Close</button></div>
                             </div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                     <div class="sa-example__code collapse" id="example-5">
                         <pre><code class="language-html">&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        &lt;div class=&quot;pb-2&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
        &lt;div class=&quot;mt-3 pt-4 border-top&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Take action&lt;/button
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;btn btn-secondary btn-sm ms-3&quot;
                data-bs-dismiss=&quot;toast&quot;
            &gt;
                Close
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-color-schemes" class="sa-anchor"><span class="sa-anchor__body">Color schemes<a class="sa-anchor__link" href="#article-color-schemes">#</a></span></h2>
                 <p>There are a total of eight color options available. Choose a color that matches the context of the toast.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="toast-container">
                             <div class="toast toast-sa-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast toast-sa-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast toast-sa-warning fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast toast-sa-info fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast toast-sa-primary fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast toast-sa-secondary fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast toast-sa-light fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                             <div class="toast toast-sa-dark fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                 <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                     <div class="me-auto fw-medium">Bootstrap</div><small>11 mins ago</small><button type="button" class="sa-close mt-n2 mb-n2 me-n3 ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                 </div>
                                 <div class="toast-body">Hello, world! This is a toast message.</div>
                             </div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                     <div class="sa-example__code collapse" id="example-6">
                         <pre><code class="language-html">&lt;div class=&quot;toast-container&quot;&gt;
    &lt;div
        class=&quot;toast toast-sa-success fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;toast toast-sa-danger fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;toast toast-sa-warning fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;toast toast-sa-info fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;toast toast-sa-primary fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;toast toast-sa-secondary fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;toast toast-sa-light fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div
        class=&quot;toast toast-sa-dark fade show&quot;
        role=&quot;alert&quot;
        aria-live=&quot;assertive&quot;
        aria-atomic=&quot;true&quot;
    &gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
            &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
            &lt;small&gt;11 mins ago&lt;/small
            &gt;&lt;button
                type=&quot;button&quot;
                class=&quot;sa-close mt-n2 mb-n2 me-n3 ms-2&quot;
                data-bs-dismiss=&quot;toast&quot;
                aria-label=&quot;Close&quot;
            &gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-placement" class="sa-anchor"><span class="sa-anchor__body">Placement<a class="sa-anchor__link" href="#article-placement">#</a></span></h2>
                 <p>Place toasts with custom CSS as you need them. The bottom right is often used for notifications, as is the bottom middle.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <form>
                             <div class="mb-4"><label for="selectToastPlacement">Toast placement</label><select class="form-select mt-3" id="selectToastPlacement">
                                     <option value="" selected="">Select a position...</option>
                                     <option value="top-0 start-0">Top left</option>
                                     <option value="top-0 start-50 translate-middle-x">Top center</option>
                                     <option value="top-0 end-0">Top right</option>
                                     <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                     <option value="top-50 start-50 translate-middle">Middle center</option>
                                     <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                     <option value="bottom-0 start-0">Bottom left</option>
                                     <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                     <option value="bottom-0 end-0">Bottom right</option>
                                 </select></div>
                         </form>
                         <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative rounded-1 h-20x">
                             <div class="toast-container position-absolute p-4" id="toastPlacement">
                                 <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                     <div class="toast-header"><img src="images/customers/customer-4-20x20.jpg" class="rounded me-3" width="20" height="20" alt="" />
                                         <div class="me-auto fw-medium">Bootstrap</div><small class="text-muted">11 mins ago</small>
                                     </div>
                                     <div class="toast-body">Hello, world! This is a toast message.</div>
                                 </div>
                             </div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                     <div class="sa-example__code collapse" id="example-7">
                         <pre><code class="language-html">&lt;form&gt;
    &lt;div class=&quot;mb-4&quot;&gt;
        &lt;label for=&quot;selectToastPlacement&quot;&gt;Toast placement&lt;/label
        &gt;&lt;select class=&quot;form-select mt-3&quot; id=&quot;selectToastPlacement&quot;&gt;
            &lt;option value=&quot;&quot; selected=&quot;&quot;&gt;Select a position...&lt;/option&gt;
            &lt;option value=&quot;top-0 start-0&quot;&gt;Top left&lt;/option&gt;
            &lt;option value=&quot;top-0 start-50 translate-middle-x&quot;&gt;Top center&lt;/option&gt;
            &lt;option value=&quot;top-0 end-0&quot;&gt;Top right&lt;/option&gt;
            &lt;option value=&quot;top-50 start-0 translate-middle-y&quot;&gt;Middle left&lt;/option&gt;
            &lt;option value=&quot;top-50 start-50 translate-middle&quot;&gt;Middle center&lt;/option&gt;
            &lt;option value=&quot;top-50 end-0 translate-middle-y&quot;&gt;Middle right&lt;/option&gt;
            &lt;option value=&quot;bottom-0 start-0&quot;&gt;Bottom left&lt;/option&gt;
            &lt;option value=&quot;bottom-0 start-50 translate-middle-x&quot;&gt;Bottom center&lt;/option&gt;
            &lt;option value=&quot;bottom-0 end-0&quot;&gt;Bottom right&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/form&gt;
&lt;div
    aria-live=&quot;polite&quot;
    aria-atomic=&quot;true&quot;
    class=&quot;bg-dark position-relative rounded-1 h-20x&quot;
&gt;
    &lt;div class=&quot;toast-container position-absolute p-4&quot; id=&quot;toastPlacement&quot;&gt;
        &lt;div
            class=&quot;toast fade show&quot;
            role=&quot;alert&quot;
            aria-live=&quot;assertive&quot;
            aria-atomic=&quot;true&quot;
        &gt;
            &lt;div class=&quot;toast-header&quot;&gt;
                &lt;img src=&quot;&quot; class=&quot;rounded me-3&quot; width=&quot;20&quot; height=&quot;20&quot; alt=&quot;&quot; /&gt;
                &lt;div class=&quot;me-auto fw-medium&quot;&gt;Bootstrap&lt;/div&gt;
                &lt;small class=&quot;text-muted&quot;&gt;11 mins ago&lt;/small&gt;
            &lt;/div&gt;
            &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div><!-- sa-app__body / end -->