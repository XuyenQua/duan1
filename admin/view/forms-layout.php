<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forms</li>
                        <li class="breadcrumb-item active" aria-current="page">Layout</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Layout</h1>
                <div class="sa-article__subtitle">Give your forms some structure – from inline to horizontal to custom grid implementations – with our form layout options.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-utilities">Utilities</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-form-grid">Form Grid</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-gutters">Gutters</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-horizontal-form">Horizontal Form</a>
                            <ul class="sa-toc__list">
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-horizontal-form-label-sizing">Horizontal Form Label Sizing</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-column-sizing">Column Sizing</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-auto-sizing">Auto-sizing</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-inline-forms">Inline Forms</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-utilities" class="sa-anchor"><span class="sa-anchor__body">Utilities<a class="sa-anchor__link" href="#article-utilities">#</a></span></h2>
                <p>Margin utilities are the easiest way to add some structure to forms. They provide basic grouping of labels, controls, optional form text, and form validation messaging. We recommend sticking to <code>margin-bottom</code> utilities, and using a single direction throughout the form for consistency.</p>
                <p>Feel free to build your forms however you like, with <code>&lt;fieldset&gt;</code>s, <code>&lt;div&gt;</code>s, or nearly any other element.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="mb-4"><label for="formGroupExampleInput" class="form-label">Example label</label><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" /></div>
                        <div><label for="formGroupExampleInput2" class="form-label">Another label</label><input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" /></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;mb-4&quot;&gt;
    &lt;label for=&quot;formGroupExampleInput&quot; class=&quot;form-label&quot;&gt;Example label&lt;/label
    &gt;&lt;input
        type=&quot;text&quot;
        class=&quot;form-control&quot;
        id=&quot;formGroupExampleInput&quot;
        placeholder=&quot;Example input placeholder&quot;
    /&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;label for=&quot;formGroupExampleInput2&quot; class=&quot;form-label&quot;&gt;Another label&lt;/label
    &gt;&lt;input
        type=&quot;text&quot;
        class=&quot;form-control&quot;
        id=&quot;formGroupExampleInput2&quot;
        placeholder=&quot;Another input placeholder&quot;
    /&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-form-grid" class="sa-anchor"><span class="sa-anchor__body">Form Grid<a class="sa-anchor__link" href="#article-form-grid">#</a></span></h2>
                <p>More complex forms can be built using our grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" placeholder="First name" aria-label="First name" /></div>
                            <div class="col"><input type="text" class="form-control" placeholder="Last name" aria-label="Last name" /></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            placeholder=&quot;First name&quot;
            aria-label=&quot;First name&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            placeholder=&quot;Last name&quot;
            aria-label=&quot;Last name&quot;
        /&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-gutters" class="sa-anchor"><span class="sa-anchor__body">Gutters<a class="sa-anchor__link" href="#article-gutters">#</a></span></h2>
                <p>By adding gutter modifier classes, you can have control over the gutter width in as well the inline as block direction.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col"><input type="text" class="form-control" placeholder="First name" aria-label="First name" /></div>
                            <div class="col"><input type="text" class="form-control" placeholder="Last name" aria-label="Last name" /></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            placeholder=&quot;First name&quot;
            aria-label=&quot;First name&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            placeholder=&quot;Last name&quot;
            aria-label=&quot;Last name&quot;
        /&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <p>More complex layouts can also be created with the grid system.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <form class="row g-4">
                            <div class="col-md-6"><label for="inputEmail4" class="form-label">Email</label><input type="email" class="form-control" id="inputEmail4" /></div>
                            <div class="col-md-6"><label for="inputPassword4" class="form-label">Password</label><input type="password" class="form-control" id="inputPassword4" /></div>
                            <div class="col-12"><label for="inputAddress" class="form-label">Address</label><input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" /></div>
                            <div class="col-12"><label for="inputAddress2" class="form-label">Address 2</label><input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" /></div>
                            <div class="col-md-6"><label for="inputCity" class="form-label">City</label><input type="text" class="form-control" id="inputCity" /></div>
                            <div class="col-md-4"><label for="inputState" class="form-label">State</label><select id="inputState" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>...</option>
                                </select></div>
                            <div class="col-md-2"><label for="inputZip" class="form-label">Zip</label><input type="text" class="form-control" id="inputZip" /></div>
                            <div class="col-12">
                                <div class="form-check"><input type="checkbox" class="form-check-input" id="gridCheck" /><label class="form-check-label" for="gridCheck">Check me out</label></div>
                            </div>
                            <div class="col-12"><button type="submit" class="btn btn-primary">Sign in</button></div>
                        </form>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;form class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label
        &gt;&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Password&lt;/label
        &gt;&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;label for=&quot;inputAddress&quot; class=&quot;form-label&quot;&gt;Address&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;inputAddress&quot;
            placeholder=&quot;1234 Main St&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;label for=&quot;inputAddress2&quot; class=&quot;form-label&quot;&gt;Address 2&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;inputAddress2&quot;
            placeholder=&quot;Apartment, studio, or floor&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;label for=&quot;inputCity&quot; class=&quot;form-label&quot;&gt;City&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;inputState&quot; class=&quot;form-label&quot;&gt;State&lt;/label
        &gt;&lt;select id=&quot;inputState&quot; class=&quot;form-select&quot;&gt;
            &lt;option selected=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-2&quot;&gt;
        &lt;label for=&quot;inputZip&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;gridCheck&quot; /&gt;&lt;label
                class=&quot;form-check-label&quot;
                for=&quot;gridCheck&quot;
                &gt;Check me out&lt;/label
            &gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-horizontal-form" class="sa-anchor"><span class="sa-anchor__body">Horizontal Form<a class="sa-anchor__link" href="#article-horizontal-form">#</a></span></h2>
                <p>Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they&#x27;re vertically centered with their associated form controls.</p>
                <p>At times, you maybe need to use margin or padding utilities to create that perfect alignment you need. For example, we&#x27;ve removed the <code>padding-top</code> on our stacked radio inputs label to better align the text baseline.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <form>
                            <div class="row mb-4"><label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10"><input type="email" class="form-control" id="inputEmail3" /></div>
                            </div>
                            <div class="row mb-4"><label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10"><input type="password" class="form-control" id="inputPassword3" /></div>
                            </div>
                            <fieldset class="row mb-4">
                                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                <div class="col-sm-10">
                                    <div class="form-check"><input type="radio" class="form-check-input" name="gridRadios" id="gridRadios1" value="option1" checked="" /><label class="form-check-label" for="gridRadios1">First radio</label></div>
                                    <div class="form-check"><input type="radio" class="form-check-input" name="gridRadios" id="gridRadios2" value="option2" /><label class="form-check-label" for="gridRadios2">Second radio</label></div>
                                    <div class="form-check disabled"><input type="radio" class="form-check-input" name="gridRadios" id="gridRadios3" disabled="" value="option3" /><label class="form-check-label" for="gridRadios3">Third disabled radio</label></div>
                                </div>
                            </fieldset>
                            <div class="row mb-4">
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check"><input type="checkbox" class="form-check-input" id="gridCheck1" /><label class="form-check-label" for="gridCheck1">Example checkbox</label></div>
                                </div>
                            </div><button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;form&gt;
    &lt;div class=&quot;row mb-4&quot;&gt;
        &lt;label for=&quot;inputEmail3&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
        &lt;div class=&quot;col-sm-10&quot;&gt;
            &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail3&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row mb-4&quot;&gt;
        &lt;label for=&quot;inputPassword3&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Password&lt;/label&gt;
        &lt;div class=&quot;col-sm-10&quot;&gt;
            &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot; /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;fieldset class=&quot;row mb-4&quot;&gt;
        &lt;legend class=&quot;col-form-label col-sm-2 pt-0&quot;&gt;Radios&lt;/legend&gt;
        &lt;div class=&quot;col-sm-10&quot;&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input
                    type=&quot;radio&quot;
                    class=&quot;form-check-input&quot;
                    name=&quot;gridRadios&quot;
                    id=&quot;gridRadios1&quot;
                    value=&quot;option1&quot;
                    checked=&quot;&quot;
                /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios1&quot;&gt;First radio&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input
                    type=&quot;radio&quot;
                    class=&quot;form-check-input&quot;
                    name=&quot;gridRadios&quot;
                    id=&quot;gridRadios2&quot;
                    value=&quot;option2&quot;
                /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios2&quot;&gt;Second radio&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check disabled&quot;&gt;
                &lt;input
                    type=&quot;radio&quot;
                    class=&quot;form-check-input&quot;
                    name=&quot;gridRadios&quot;
                    id=&quot;gridRadios3&quot;
                    disabled=&quot;&quot;
                    value=&quot;option3&quot;
                /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios3&quot;
                    &gt;Third disabled radio&lt;/label
                &gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/fieldset&gt;
    &lt;div class=&quot;row mb-4&quot;&gt;
        &lt;div class=&quot;col-sm-10 offset-sm-2&quot;&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;gridCheck1&quot; /&gt;&lt;label
                    class=&quot;form-check-label&quot;
                    for=&quot;gridCheck1&quot;
                    &gt;Example checkbox&lt;/label
                &gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h3 id="article-horizontal-form-label-sizing" class="sa-anchor"><span class="sa-anchor__body">Horizontal Form Label Sizing<a class="sa-anchor__link" href="#article-horizontal-form-label-sizing">#</a></span></h3>
                <p>Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row mb-4"><label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                            <div class="col-sm-10"><input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" /></div>
                        </div>
                        <div class="row mb-4"><label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10"><input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label" /></div>
                        </div>
                        <div class="row"><label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                            <div class="col-sm-10"><input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg" /></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;row mb-4&quot;&gt;
    &lt;label for=&quot;colFormLabelSm&quot; class=&quot;col-sm-2 col-form-label col-form-label-sm&quot;
        &gt;Email&lt;/label
    &gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
        &lt;input
            type=&quot;email&quot;
            class=&quot;form-control form-control-sm&quot;
            id=&quot;colFormLabelSm&quot;
            placeholder=&quot;col-form-label-sm&quot;
        /&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row mb-4&quot;&gt;
    &lt;label for=&quot;colFormLabel&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
        &lt;input
            type=&quot;email&quot;
            class=&quot;form-control&quot;
            id=&quot;colFormLabel&quot;
            placeholder=&quot;col-form-label&quot;
        /&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;label for=&quot;colFormLabelLg&quot; class=&quot;col-sm-2 col-form-label col-form-label-lg&quot;
        &gt;Email&lt;/label
    &gt;
    &lt;div class=&quot;col-sm-10&quot;&gt;
        &lt;input
            type=&quot;email&quot;
            class=&quot;form-control form-control-lg&quot;
            id=&quot;colFormLabelLg&quot;
            placeholder=&quot;col-form-label-lg&quot;
        /&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h2 id="article-column-sizing" class="sa-anchor"><span class="sa-anchor__body">Column Sizing<a class="sa-anchor__link" href="#article-column-sizing">#</a></span></h2>
                <p>As shown in the previous examples, our grid system allows you to place any number of <code>.col</code>s within a <code>.row</code>. They&#x27;ll split the available width equally between them. You may also pick a subset of your columns to take up more or less space, while the remaining <code>.col</code>s equally split the rest, with specific column classes like <code>.col-sm-7</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-4">
                            <div class="col-sm-7"><input type="text" class="form-control" placeholder="City" aria-label="City" /></div>
                            <div class="col-sm"><input type="text" class="form-control" placeholder="State" aria-label="State" /></div>
                            <div class="col-sm"><input type="text" class="form-control" placeholder="Zip" aria-label="Zip" /></div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;div class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-sm-7&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;City&quot; aria-label=&quot;City&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-sm&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;State&quot; aria-label=&quot;State&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-sm&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Zip&quot; aria-label=&quot;Zip&quot; /&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
                <h2 id="article-auto-sizing" class="sa-anchor"><span class="sa-anchor__body">Auto-sizing<a class="sa-anchor__link" href="#article-auto-sizing">#</a></span></h2>
                <p>The example below uses a flexbox utility to vertically center the contents and changes <code>.col</code> to <code>.col-auto</code> so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <form class="row g-4 align-items-center">
                            <div class="col-auto"><label class="visually-hidden" for="autoSizingInput">Name</label><input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe" /></div>
                            <div class="col-auto"><label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div><input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username" />
                                </div>
                            </div>
                            <div class="col-auto"><label class="visually-hidden" for="autoSizingSelect">Preference</label><select class="form-select" id="autoSizingSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select></div>
                            <div class="col-auto">
                                <div class="form-check"><input type="checkbox" class="form-check-input" id="autoSizingCheck" /><label class="form-check-label" for="autoSizingCheck">Remember me</label></div>
                            </div>
                            <div class="col-auto"><button type="submit" class="btn btn-primary">Submit</button></div>
                        </form>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    <div class="sa-example__code collapse" id="example-8">
                        <pre><code class="language-html">&lt;form class=&quot;row g-4 align-items-center&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;autoSizingInput&quot;&gt;Name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;autoSizingInput&quot;
            placeholder=&quot;Jane Doe&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;autoSizingInputGroup&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
            &lt;input
                type=&quot;text&quot;
                class=&quot;form-control&quot;
                id=&quot;autoSizingInputGroup&quot;
                placeholder=&quot;Username&quot;
            /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;autoSizingSelect&quot;&gt;Preference&lt;/label
        &gt;&lt;select class=&quot;form-select&quot; id=&quot;autoSizingSelect&quot;&gt;
            &lt;option selected=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;autoSizingCheck&quot; /&gt;&lt;label
                class=&quot;form-check-label&quot;
                for=&quot;autoSizingCheck&quot;
                &gt;Remember me&lt;/label
            &gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-8" aria-expanded="false" aria-controls="example-8">Source Code</button>
                    </div>
                </div>
                <p>You can then remix that once again with size-specific column classes.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <form class="row g-4 align-items-center">
                            <div class="col-sm-3"><label class="visually-hidden" for="specificSizeInputName">Name</label><input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe" /></div>
                            <div class="col-sm-3"><label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div><input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username" />
                                </div>
                            </div>
                            <div class="col-sm-3"><label class="visually-hidden" for="specificSizeSelect">Preference</label><select class="form-select" id="specificSizeSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select></div>
                            <div class="col-auto">
                                <div class="form-check"><input type="checkbox" class="form-check-input" id="autoSizingCheck2" /><label class="form-check-label" for="autoSizingCheck2">Remember me</label></div>
                            </div>
                            <div class="col-auto"><button type="submit" class="btn btn-primary">Submit</button></div>
                        </form>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    <div class="sa-example__code collapse" id="example-9">
                        <pre><code class="language-html">&lt;form class=&quot;row g-4 align-items-center&quot;&gt;
    &lt;div class=&quot;col-sm-3&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;specificSizeInputName&quot;&gt;Name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;specificSizeInputName&quot;
            placeholder=&quot;Jane Doe&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-3&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;specificSizeInputGroupUsername&quot;
            &gt;Username&lt;/label
        &gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
            &lt;input
                type=&quot;text&quot;
                class=&quot;form-control&quot;
                id=&quot;specificSizeInputGroupUsername&quot;
                placeholder=&quot;Username&quot;
            /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-3&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;specificSizeSelect&quot;&gt;Preference&lt;/label
        &gt;&lt;select class=&quot;form-select&quot; id=&quot;specificSizeSelect&quot;&gt;
            &lt;option selected=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;autoSizingCheck2&quot; /&gt;&lt;label
                class=&quot;form-check-label&quot;
                for=&quot;autoSizingCheck2&quot;
                &gt;Remember me&lt;/label
            &gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-9" aria-expanded="false" aria-controls="example-9">Source Code</button>
                    </div>
                </div>
                <h2 id="article-inline-forms" class="sa-anchor"><span class="sa-anchor__body">Inline Forms<a class="sa-anchor__link" href="#article-inline-forms">#</a></span></h2>
                <p>Use the <code>.row-cols-*</code> classes to create responsive horizontal layouts. By adding gutter modifier classes, we&#x27;ll have gutters in horizontal and vertical directions. On narrow mobile viewports, the <code>.col-12</code> helps stack the form controls and more. The <code>.align-items-center</code> aligns the form elements to the middle, making the <code>.form-checkbox</code> align properly.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <form class="row row-cols-lg-auto g-4 align-items-center">
                            <div class="col-12"><label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div><input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" />
                                </div>
                            </div>
                            <div class="col-12"><label class="visually-hidden" for="inlineFormSelectPref">Preference</label><select class="form-select" id="inlineFormSelectPref">
                                    <option selected="">Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select></div>
                            <div class="col-12">
                                <div class="form-check"><input type="checkbox" class="form-check-input" id="inlineFormCheck" /><label class="form-check-label" for="inlineFormCheck">Remember me</label></div>
                            </div>
                            <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
                        </form>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-10" aria-expanded="false" aria-controls="example-10">Source Code</button>
                    <div class="sa-example__code collapse" id="example-10">
                        <pre><code class="language-html">&lt;form class=&quot;row row-cols-lg-auto g-4 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormInputGroupUsername&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
            &lt;input
                type=&quot;text&quot;
                class=&quot;form-control&quot;
                id=&quot;inlineFormInputGroupUsername&quot;
                placeholder=&quot;Username&quot;
            /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormSelectPref&quot;&gt;Preference&lt;/label
        &gt;&lt;select class=&quot;form-select&quot; id=&quot;inlineFormSelectPref&quot;&gt;
            &lt;option selected=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;inlineFormCheck&quot; /&gt;&lt;label
                class=&quot;form-check-label&quot;
                for=&quot;inlineFormCheck&quot;
                &gt;Remember me&lt;/label
            &gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-10" aria-expanded="false" aria-controls="example-10">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->