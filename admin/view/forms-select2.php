<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forms</li>
                        <li class="breadcrumb-item active" aria-current="page">Select2</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Select2</h1>
                <div class="sa-article__subtitle">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other options.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-single-select">Single-select</a>
                            <ul class="sa-toc__list">
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-single-select-sizing">Sizing</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-single-select-states">States</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-multi-select">Multi-select</a>
                            <ul class="sa-toc__list">
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-multi-select-sizing">Sizing</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                                <li class="sa-toc__item"><a class="sa-toc__link" href="#article-multi-select-states">States</a>
                                    <ul class="sa-toc__list"></ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Use the <code>.sa-select2</code> class on a regular <code>&lt;select&gt;</code> element to turn it into an enhanced select2.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><select class="sa-select2 form-select">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;select class=&quot;sa-select2 form-select&quot;&gt;
    &lt;optgroup label=&quot;Alaskan/Hawaiian Time Zone&quot;&gt;
        &lt;option value=&quot;AK&quot;&gt;Alaska&lt;/option&gt;
        &lt;option value=&quot;HI&quot;&gt;Hawaii&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Pacific Time Zone&quot;&gt;
        &lt;option value=&quot;CA&quot;&gt;California&lt;/option&gt;
        &lt;option value=&quot;NV&quot;&gt;Nevada&lt;/option&gt;
        &lt;option value=&quot;OR&quot;&gt;Oregon&lt;/option&gt;
        &lt;option value=&quot;WA&quot;&gt;Washington&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Mountain Time Zone&quot;&gt;
        &lt;option value=&quot;AZ&quot;&gt;Arizona&lt;/option&gt;
        &lt;option value=&quot;CO&quot;&gt;Colorado&lt;/option&gt;
        &lt;option value=&quot;ID&quot;&gt;Idaho&lt;/option&gt;
        &lt;option value=&quot;MT&quot;&gt;Montana&lt;/option&gt;
        &lt;option value=&quot;NE&quot;&gt;Nebraska&lt;/option&gt;
        &lt;option value=&quot;NM&quot;&gt;New Mexico&lt;/option&gt;
        &lt;option value=&quot;ND&quot;&gt;North Dakota&lt;/option&gt;
        &lt;option value=&quot;UT&quot;&gt;Utah&lt;/option&gt;
        &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Central Time Zone&quot;&gt;
        &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
        &lt;option value=&quot;AR&quot;&gt;Arkansas&lt;/option&gt;
        &lt;option value=&quot;IL&quot;&gt;Illinois&lt;/option&gt;
        &lt;option value=&quot;IA&quot;&gt;Iowa&lt;/option&gt;
        &lt;option value=&quot;KS&quot;&gt;Kansas&lt;/option&gt;
        &lt;option value=&quot;KY&quot;&gt;Kentucky&lt;/option&gt;
        &lt;option value=&quot;LA&quot;&gt;Louisiana&lt;/option&gt;
        &lt;option value=&quot;MN&quot;&gt;Minnesota&lt;/option&gt;
        &lt;option value=&quot;MS&quot;&gt;Mississippi&lt;/option&gt;
        &lt;option value=&quot;MO&quot;&gt;Missouri&lt;/option&gt;
        &lt;option value=&quot;OK&quot;&gt;Oklahoma&lt;/option&gt;
        &lt;option value=&quot;SD&quot;&gt;South Dakota&lt;/option&gt;
        &lt;option value=&quot;TX&quot;&gt;Texas&lt;/option&gt;
        &lt;option value=&quot;TN&quot;&gt;Tennessee&lt;/option&gt;
        &lt;option value=&quot;WI&quot;&gt;Wisconsin&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Eastern Time Zone&quot;&gt;
        &lt;option value=&quot;CT&quot;&gt;Connecticut&lt;/option&gt;
        &lt;option value=&quot;DE&quot;&gt;Delaware&lt;/option&gt;
        &lt;option value=&quot;FL&quot;&gt;Florida&lt;/option&gt;
        &lt;option value=&quot;GA&quot;&gt;Georgia&lt;/option&gt;
        &lt;option value=&quot;IN&quot;&gt;Indiana&lt;/option&gt;
        &lt;option value=&quot;ME&quot;&gt;Maine&lt;/option&gt;
        &lt;option value=&quot;MD&quot;&gt;Maryland&lt;/option&gt;
        &lt;option value=&quot;MA&quot;&gt;Massachusetts&lt;/option&gt;
        &lt;option value=&quot;MI&quot;&gt;Michigan&lt;/option&gt;
        &lt;option value=&quot;NH&quot;&gt;New Hampshire&lt;/option&gt;
        &lt;option value=&quot;NJ&quot;&gt;New Jersey&lt;/option&gt;
        &lt;option value=&quot;NY&quot;&gt;New York&lt;/option&gt;
        &lt;option value=&quot;NC&quot;&gt;North Carolina&lt;/option&gt;
        &lt;option value=&quot;OH&quot;&gt;Ohio&lt;/option&gt;
        &lt;option value=&quot;PA&quot;&gt;Pennsylvania&lt;/option&gt;
        &lt;option value=&quot;RI&quot;&gt;Rhode Island&lt;/option&gt;
        &lt;option value=&quot;SC&quot;&gt;South Carolina&lt;/option&gt;
        &lt;option value=&quot;VT&quot;&gt;Vermont&lt;/option&gt;
        &lt;option value=&quot;VA&quot;&gt;Virginia&lt;/option&gt;
        &lt;option value=&quot;WV&quot;&gt;West Virginia&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <p>Select2 also supports multi-value select boxes. The select below is declared with the <code>multiple</code> attribute.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><select class="sa-select2 form-select" multiple="">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK" selected="">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select></div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;select class=&quot;sa-select2 form-select&quot; multiple=&quot;&quot;&gt;
    &lt;optgroup label=&quot;Alaskan/Hawaiian Time Zone&quot;&gt;
        &lt;option value=&quot;AK&quot; selected=&quot;&quot;&gt;Alaska&lt;/option&gt;
        &lt;option value=&quot;HI&quot;&gt;Hawaii&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Pacific Time Zone&quot;&gt;
        &lt;option value=&quot;CA&quot;&gt;California&lt;/option&gt;
        &lt;option value=&quot;NV&quot;&gt;Nevada&lt;/option&gt;
        &lt;option value=&quot;OR&quot;&gt;Oregon&lt;/option&gt;
        &lt;option value=&quot;WA&quot;&gt;Washington&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Mountain Time Zone&quot;&gt;
        &lt;option value=&quot;AZ&quot;&gt;Arizona&lt;/option&gt;
        &lt;option value=&quot;CO&quot;&gt;Colorado&lt;/option&gt;
        &lt;option value=&quot;ID&quot;&gt;Idaho&lt;/option&gt;
        &lt;option value=&quot;MT&quot;&gt;Montana&lt;/option&gt;
        &lt;option value=&quot;NE&quot;&gt;Nebraska&lt;/option&gt;
        &lt;option value=&quot;NM&quot;&gt;New Mexico&lt;/option&gt;
        &lt;option value=&quot;ND&quot;&gt;North Dakota&lt;/option&gt;
        &lt;option value=&quot;UT&quot;&gt;Utah&lt;/option&gt;
        &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Central Time Zone&quot;&gt;
        &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
        &lt;option value=&quot;AR&quot;&gt;Arkansas&lt;/option&gt;
        &lt;option value=&quot;IL&quot;&gt;Illinois&lt;/option&gt;
        &lt;option value=&quot;IA&quot;&gt;Iowa&lt;/option&gt;
        &lt;option value=&quot;KS&quot;&gt;Kansas&lt;/option&gt;
        &lt;option value=&quot;KY&quot;&gt;Kentucky&lt;/option&gt;
        &lt;option value=&quot;LA&quot;&gt;Louisiana&lt;/option&gt;
        &lt;option value=&quot;MN&quot;&gt;Minnesota&lt;/option&gt;
        &lt;option value=&quot;MS&quot;&gt;Mississippi&lt;/option&gt;
        &lt;option value=&quot;MO&quot;&gt;Missouri&lt;/option&gt;
        &lt;option value=&quot;OK&quot;&gt;Oklahoma&lt;/option&gt;
        &lt;option value=&quot;SD&quot;&gt;South Dakota&lt;/option&gt;
        &lt;option value=&quot;TX&quot;&gt;Texas&lt;/option&gt;
        &lt;option value=&quot;TN&quot;&gt;Tennessee&lt;/option&gt;
        &lt;option value=&quot;WI&quot;&gt;Wisconsin&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Eastern Time Zone&quot;&gt;
        &lt;option value=&quot;CT&quot;&gt;Connecticut&lt;/option&gt;
        &lt;option value=&quot;DE&quot;&gt;Delaware&lt;/option&gt;
        &lt;option value=&quot;FL&quot;&gt;Florida&lt;/option&gt;
        &lt;option value=&quot;GA&quot;&gt;Georgia&lt;/option&gt;
        &lt;option value=&quot;IN&quot;&gt;Indiana&lt;/option&gt;
        &lt;option value=&quot;ME&quot;&gt;Maine&lt;/option&gt;
        &lt;option value=&quot;MD&quot;&gt;Maryland&lt;/option&gt;
        &lt;option value=&quot;MA&quot;&gt;Massachusetts&lt;/option&gt;
        &lt;option value=&quot;MI&quot;&gt;Michigan&lt;/option&gt;
        &lt;option value=&quot;NH&quot;&gt;New Hampshire&lt;/option&gt;
        &lt;option value=&quot;NJ&quot;&gt;New Jersey&lt;/option&gt;
        &lt;option value=&quot;NY&quot;&gt;New York&lt;/option&gt;
        &lt;option value=&quot;NC&quot;&gt;North Carolina&lt;/option&gt;
        &lt;option value=&quot;OH&quot;&gt;Ohio&lt;/option&gt;
        &lt;option value=&quot;PA&quot;&gt;Pennsylvania&lt;/option&gt;
        &lt;option value=&quot;RI&quot;&gt;Rhode Island&lt;/option&gt;
        &lt;option value=&quot;SC&quot;&gt;South Carolina&lt;/option&gt;
        &lt;option value=&quot;VT&quot;&gt;Vermont&lt;/option&gt;
        &lt;option value=&quot;VA&quot;&gt;Virginia&lt;/option&gt;
        &lt;option value=&quot;WV&quot;&gt;West Virginia&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-single-select" class="sa-anchor"><span class="sa-anchor__body">Single-select<a class="sa-anchor__link" href="#article-single-select">#</a></span></h2>
                <h3 id="article-single-select-sizing" class="sa-anchor"><span class="sa-anchor__body">Sizing<a class="sa-anchor__link" href="#article-single-select-sizing">#</a></span></h3>
                <p>Set heights using classes like <code>.form-select-lg</code> and <code>.form-select-sm</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div><select class="sa-select2 form-select form-select-lg">
                                <option selected="">Large</option>
                            </select></div>
                        <div class="mt-3"><select class="sa-select2 form-select">
                                <option selected="">Normal</option>
                            </select></div>
                        <div class="mt-3"><select class="sa-select2 form-select form-select-sm">
                                <option selected="">Small</option>
                            </select></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;div&gt;
    &lt;select class=&quot;sa-select2 form-select form-select-lg&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Large&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select class=&quot;sa-select2 form-select&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Normal&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select class=&quot;sa-select2 form-select form-select-sm&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Small&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h3 id="article-single-select-states" class="sa-anchor"><span class="sa-anchor__body">States<a class="sa-anchor__link" href="#article-single-select-states">#</a></span></h3>
                <p>A select can be in several different states. Below you can see a demo of these states:</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div><select class="sa-select2 form-select">
                                <option selected="">Normal</option>
                            </select></div>
                        <div class="mt-3"><select class="sa-select2 form-select" disabled="">
                                <option selected="">Disabled</option>
                            </select></div>
                        <div class="mt-3"><select class="sa-select2 form-select is-valid">
                                <option selected="">Valid</option>
                            </select></div>
                        <div class="mt-3"><select class="sa-select2 form-select is-invalid">
                                <option selected="">Invalid</option>
                            </select></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;div&gt;
    &lt;select class=&quot;sa-select2 form-select&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Normal&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select class=&quot;sa-select2 form-select&quot; disabled=&quot;&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Disabled&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select class=&quot;sa-select2 form-select is-valid&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Valid&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select class=&quot;sa-select2 form-select is-invalid&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Invalid&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <h2 id="article-multi-select" class="sa-anchor"><span class="sa-anchor__body">Multi-select<a class="sa-anchor__link" href="#article-multi-select">#</a></span></h2>
                <h3 id="article-multi-select-sizing" class="sa-anchor"><span class="sa-anchor__body">Sizing<a class="sa-anchor__link" href="#article-multi-select-sizing">#</a></span></h3>
                <p>Set heights using classes like <code>.form-select-lg</code> and <code>.form-select-sm</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div><select multiple="" class="sa-select2 form-select form-select-lg">
                                <option selected="">Large</option>
                                <option selected="">One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select></div>
                        <div class="mt-3"><select multiple="" class="sa-select2 form-select">
                                <option selected="">Normal</option>
                                <option selected="">One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select></div>
                        <div class="mt-3"><select multiple="" class="sa-select2 form-select form-select-sm">
                                <option selected="">Small</option>
                                <option selected="">One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;div&gt;
    &lt;select multiple=&quot;&quot; class=&quot;sa-select2 form-select form-select-lg&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Large&lt;/option&gt;
        &lt;option selected=&quot;&quot;&gt;One&lt;/option&gt;
        &lt;option&gt;Two&lt;/option&gt;
        &lt;option&gt;Three&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select multiple=&quot;&quot; class=&quot;sa-select2 form-select&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Normal&lt;/option&gt;
        &lt;option selected=&quot;&quot;&gt;One&lt;/option&gt;
        &lt;option&gt;Two&lt;/option&gt;
        &lt;option&gt;Three&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select multiple=&quot;&quot; class=&quot;sa-select2 form-select form-select-sm&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Small&lt;/option&gt;
        &lt;option selected=&quot;&quot;&gt;One&lt;/option&gt;
        &lt;option&gt;Two&lt;/option&gt;
        &lt;option&gt;Three&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h3 id="article-multi-select-states" class="sa-anchor"><span class="sa-anchor__body">States<a class="sa-anchor__link" href="#article-multi-select-states">#</a></span></h3>
                <p>A select can be in several different states. Below you can see a demo of these states:</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div><select multiple="" class="sa-select2 form-select">
                                <option selected="">Normal</option>
                            </select></div>
                        <div class="mt-3"><select multiple="" class="sa-select2 form-select" disabled="">
                                <option selected="">Disabled</option>
                            </select></div>
                        <div class="mt-3"><select multiple="" class="sa-select2 form-select is-valid">
                                <option selected="">Valid</option>
                            </select></div>
                        <div class="mt-3"><select multiple="" class="sa-select2 form-select is-invalid">
                                <option selected="">Invalid</option>
                            </select></div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div&gt;
    &lt;select multiple=&quot;&quot; class=&quot;sa-select2 form-select&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Normal&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select multiple=&quot;&quot; class=&quot;sa-select2 form-select&quot; disabled=&quot;&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Disabled&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select multiple=&quot;&quot; class=&quot;sa-select2 form-select is-valid&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Valid&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
    &lt;select multiple=&quot;&quot; class=&quot;sa-select2 form-select is-invalid&quot;&gt;
        &lt;option selected=&quot;&quot;&gt;Invalid&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->