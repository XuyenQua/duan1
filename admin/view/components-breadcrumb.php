 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="sa-article sa-article--has-toc">
         <div class="sa-article__container container container--max--md">
             <div class="sa-article__header">
                 <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                     <ol class="breadcrumb breadcrumb-sa-simple">
                         <li class="breadcrumb-item">
                             <a href="index.html">Dashboard</a>
                         </li>
                         <li class="breadcrumb-item active" aria-current="page">
                             Components
                         </li>
                         <li class="breadcrumb-item active" aria-current="page">
                             Breadcrumb
                         </li>
                     </ol>
                 </nav>
                 <h1 class="sa-article__title">Breadcrumb</h1>
                 <div class="sa-article__subtitle">
                     Indicate the current page&#x27;s location within a
                     navigational hierarchy that automatically adds separators via
                     CSS.
                 </div>
             </div>
             <div class="sa-toc sa-article__toc">
                 <div class="sa-toc__container">
                     <div class="sa-toc__head">
                         <a class="sa-toc__link" href="#top">Table of Content</a>
                     </div>
                     <ul class="sa-toc__list">
                         <li class="sa-toc__item">
                             <a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item">
                             <a class="sa-toc__link" href="#article-dividers">Dividers</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="sa-article__content">
                 <h2 id="article-basic-example" class="sa-anchor">
                     <span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span>
                 </h2>
                 <p>
                     Use an ordered or unordered list with linked list items to
                     create a minimally styled breadcrumb. Use our utilities to add
                     additional styles as desired.
                 </p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb breadcrumb-sa-simple mb-5">
                                 <li class="breadcrumb-item active" aria-current="page">
                                     Home
                                 </li>
                             </ol>
                         </nav>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb breadcrumb-sa-simple mb-5">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">
                                     Library
                                 </li>
                             </ol>
                         </nav>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb breadcrumb-sa-simple mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item"><a href="#">Library</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">
                                     Data
                                 </li>
                             </ol>
                         </nav>
                     </div>
                     <button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">
                         Source Code
                     </button>
                     <div class="sa-example__code collapse" id="example-1">
                         <pre><code class="language-html">&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-sa-simple mb-5&quot;&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Home&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-sa-simple mb-5&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-sa-simple mb-0&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                         <button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">
                             Source Code
                         </button>
                     </div>
                 </div>
                 <h2 id="article-dividers" class="sa-anchor">
                     <span class="sa-anchor__body">Dividers<a class="sa-anchor__link" href="#article-dividers">#</a></span>
                 </h2>
                 <p>
                     Dividers are automatically added in CSS through
                     <code>::before</code> and <code>content</code>. They can be
                     changed by modifying a local CSS custom property
                     <code>--bs-breadcrumb-divider</code>.
                 </p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <nav style="--bs-breadcrumb-divider: '&gt;'" aria-label="breadcrumb">
                             <ol class="breadcrumb breadcrumb-sa-simple">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">
                                     Library
                                 </li>
                             </ol>
                         </nav>
                     </div>
                     <button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">
                         Source Code
                     </button>
                     <div class="sa-example__code collapse" id="example-2">
                         <pre><code class="language-html">&lt;nav style=&quot;--bs-breadcrumb-divider: &#x27;&amp;gt;&#x27;&quot; aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-sa-simple&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                         <button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">
                             Source Code
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- sa-app__body / end -->