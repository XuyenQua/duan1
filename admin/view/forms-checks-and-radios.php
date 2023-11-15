 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="sa-article sa-article--has-toc">
         <div class="sa-article__container container container--max--md">
             <div class="sa-article__header">
                 <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                     <ol class="breadcrumb breadcrumb-sa-simple">
                         <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Forms</li>
                         <li class="breadcrumb-item active" aria-current="page">Checks And Radios</li>
                     </ol>
                 </nav>
                 <h1 class="sa-article__title">Checks And Radios</h1>
                 <div class="sa-article__subtitle">Consistent cross-browser and cross-device checkboxes and radios. Documentation and description for the corresponding controls.</div>
             </div>
             <div class="sa-toc sa-article__toc">
                 <div class="sa-toc__container">
                     <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                     <ul class="sa-toc__list">
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-checkbox-states">Checkbox States</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-radio-states">Radio States</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-switches-states">Switches States</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-inline">Inline</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-without-labels">Without labels</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="sa-article__content">
                 <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="row">
                             <div class="col"><label class="form-check"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Checkbox one</span></label><label class="form-check"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Checkbox two</span></label><label class="form-check"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Checkbox three</span></label></div>
                             <div class="col"><label class="form-check"><input type="radio" class="form-check-input" name="exampleRadio1" /><span class="form-check-label">Radio one</span></label><label class="form-check"><input type="radio" class="form-check-input" name="exampleRadio1" /><span class="form-check-label">Radio two</span></label><label class="form-check"><input type="radio" class="form-check-input" name="exampleRadio1" /><span class="form-check-label">Radio three</span></label></div>
                             <div class="col"><label class="form-check form-switch"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Switch one</span></label><label class="form-check form-switch"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Switch two</span></label><label class="form-check form-switch"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Switch three</span></label></div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                     <div class="sa-example__code collapse" id="example-1">
                         <pre><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Checkbox one&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Checkbox two&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Checkbox three&lt;/span
            &gt;&lt;/label
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;exampleRadio1&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Radio one&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;exampleRadio1&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Radio two&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;exampleRadio1&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Radio three&lt;/span
            &gt;&lt;/label
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Switch one&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Switch two&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Switch three&lt;/span
            &gt;&lt;/label
        &gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-checkbox-states" class="sa-anchor"><span class="sa-anchor__body">Checkbox States<a class="sa-anchor__link" href="#article-checkbox-states">#</a></span></h2>
                 <p>A checkbox can be in several different states. Below you can see a demo of these states:</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="row">
                             <div class="col"><label class="form-check"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Normal</span></label><label class="form-check"><input type="checkbox" class="form-check-input sa-indeterminate" /><span class="form-check-label">Indeterminate</span></label><label class="form-check"><input type="checkbox" class="form-check-input" checked="" /><span class="form-check-label">Checked</span></label><label class="form-check"><input type="checkbox" class="form-check-input is-valid" /><span class="form-check-label">Valid</span></label></div>
                             <div class="col"><label class="form-check"><input type="checkbox" class="form-check-input" disabled="" /><span class="form-check-label">Normal Disabled</span></label><label class="form-check"><input type="checkbox" class="form-check-input sa-indeterminate" disabled="" /><span class="form-check-label">Indeterminate Disabled</span></label><label class="form-check"><input type="checkbox" class="form-check-input" disabled="" checked="" /><span class="form-check-label">Checked Disabled</span></label><label class="form-check"><input type="checkbox" class="form-check-input is-invalid" /><span class="form-check-label">Invalid</span></label></div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                     <div class="sa-example__code collapse" id="example-2">
                         <pre><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Normal&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input sa-indeterminate&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Indeterminate&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; checked=&quot;&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Checked&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input is-valid&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Valid&lt;/span
            &gt;&lt;/label
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; disabled=&quot;&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Normal Disabled&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input
                type=&quot;checkbox&quot;
                class=&quot;form-check-input sa-indeterminate&quot;
                disabled=&quot;&quot;
            /&gt;&lt;span class=&quot;form-check-label&quot;&gt;Indeterminate Disabled&lt;/span&gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input
                type=&quot;checkbox&quot;
                class=&quot;form-check-input&quot;
                disabled=&quot;&quot;
                checked=&quot;&quot;
            /&gt;&lt;span class=&quot;form-check-label&quot;&gt;Checked Disabled&lt;/span&gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input is-invalid&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Invalid&lt;/span
            &gt;&lt;/label
        &gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-radio-states" class="sa-anchor"><span class="sa-anchor__body">Radio States<a class="sa-anchor__link" href="#article-radio-states">#</a></span></h2>
                 <p>A radio can be in several different states. Below you can see a demo of these states:</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="row">
                             <div class="col"><label class="form-check"><input type="radio" class="form-check-input" name="exampleRadio2" /><span class="form-check-label">Normal</span></label><label class="form-check"><input type="radio" class="form-check-input" name="exampleRadio2" checked="" /><span class="form-check-label">Checked</span></label><label class="form-check"><input type="radio" class="form-check-input is-valid" name="exampleRadio2" /><span class="form-check-label">Valid</span></label></div>
                             <div class="col"><label class="form-check"><input type="radio" class="form-check-input" disabled="" /><span class="form-check-label">Normal Disabled</span></label><label class="form-check"><input type="radio" class="form-check-input" disabled="" checked="" /><span class="form-check-label">Checked Disabled</span></label><label class="form-check"><input type="radio" class="form-check-input is-invalid" name="exampleRadio2" /><span class="form-check-label">Invalid</span></label></div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                     <div class="sa-example__code collapse" id="example-3">
                         <pre><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;exampleRadio2&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Normal&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input
                type=&quot;radio&quot;
                class=&quot;form-check-input&quot;
                name=&quot;exampleRadio2&quot;
                checked=&quot;&quot;
            /&gt;&lt;span class=&quot;form-check-label&quot;&gt;Checked&lt;/span&gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input
                type=&quot;radio&quot;
                class=&quot;form-check-input is-valid&quot;
                name=&quot;exampleRadio2&quot;
            /&gt;&lt;span class=&quot;form-check-label&quot;&gt;Valid&lt;/span&gt;&lt;/label
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; disabled=&quot;&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Normal Disabled&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; disabled=&quot;&quot; checked=&quot;&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Checked Disabled&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check&quot;
            &gt;&lt;input
                type=&quot;radio&quot;
                class=&quot;form-check-input is-invalid&quot;
                name=&quot;exampleRadio2&quot;
            /&gt;&lt;span class=&quot;form-check-label&quot;&gt;Invalid&lt;/span&gt;&lt;/label
        &gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-switches-states" class="sa-anchor"><span class="sa-anchor__body">Switches States<a class="sa-anchor__link" href="#article-switches-states">#</a></span></h2>
                 <p>A switches can be in several different states. Below you can see a demo of these states:</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div class="row">
                             <div class="col"><label class="form-check form-switch"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Normal</span></label><label class="form-check form-switch"><input type="checkbox" class="form-check-input" checked="" /><span class="form-check-label">Checked</span></label><label class="form-check form-switch"><input type="checkbox" class="form-check-input is-valid" /><span class="form-check-label">Valid</span></label></div>
                             <div class="col"><label class="form-check form-switch"><input type="checkbox" class="form-check-input" disabled="" /><span class="form-check-label">Normal Disabled</span></label><label class="form-check form-switch"><input type="checkbox" class="form-check-input" disabled="" checked="" /><span class="form-check-label">Checked Disabled</span></label><label class="form-check form-switch"><input type="checkbox" class="form-check-input is-invalid" /><span class="form-check-label">Invalid</span></label></div>
                         </div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                     <div class="sa-example__code collapse" id="example-4">
                         <pre><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Normal&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; checked=&quot;&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Checked&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input is-valid&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Valid&lt;/span
            &gt;&lt;/label
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; disabled=&quot;&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Normal Disabled&lt;/span
            &gt;&lt;/label
        &gt;&lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input
                type=&quot;checkbox&quot;
                class=&quot;form-check-input&quot;
                disabled=&quot;&quot;
                checked=&quot;&quot;
            /&gt;&lt;span class=&quot;form-check-label&quot;&gt;Checked Disabled&lt;/span&gt;&lt;/label
        &gt;&lt;label class=&quot;form-check form-switch&quot;
            &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input is-invalid&quot; /&gt;&lt;span
                class=&quot;form-check-label&quot;
                &gt;Invalid&lt;/span
            &gt;&lt;/label
        &gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-inline" class="sa-anchor"><span class="sa-anchor__body">Inline<a class="sa-anchor__link" href="#article-inline">#</a></span></h2>
                 <p>Group checkboxes or radios on the same horizontal row by adding <code>.custom-control-inline</code> to any <code>.custom-radio</code> or <code>.custom-checkbox</code> or <code>.custom-switch</code>.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div><label class="form-check form-check-inline"><input type="checkbox" class="form-check-input" /><span class="form-check-label">1</span></label><label class="form-check form-check-inline"><input type="checkbox" class="form-check-input" /><span class="form-check-label">2</span></label><label class="form-check form-check-inline"><input type="checkbox" class="form-check-input" disabled="" /><span class="form-check-label">3 (disabled)</span></label></div>
                         <div class="mt-2"><label class="form-check form-check-inline"><input type="radio" class="form-check-input" name="exampleRadio3" /><span class="form-check-label">1</span></label><label class="form-check form-check-inline"><input type="radio" class="form-check-input" name="exampleRadio3" /><span class="form-check-label">2</span></label><label class="form-check form-check-inline"><input type="radio" class="form-check-input" name="exampleRadio3" disabled="" /><span class="form-check-label">3 (disabled)</span></label></div>
                         <div class="mt-2"><label class="form-check form-switch form-check-inline"><input type="checkbox" class="form-check-input" /><span class="form-check-label">1</span></label><label class="form-check form-switch form-check-inline"><input type="checkbox" class="form-check-input" /><span class="form-check-label">2</span></label><label class="form-check form-switch form-check-inline"><input type="checkbox" class="form-check-input" disabled="" /><span class="form-check-label">3 (disabled)</span></label></div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                     <div class="sa-example__code collapse" id="example-5">
                         <pre><code class="language-html">&lt;div&gt;
    &lt;label class=&quot;form-check form-check-inline&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span class=&quot;form-check-label&quot;
            &gt;1&lt;/span
        &gt;&lt;/label
    &gt;&lt;label class=&quot;form-check form-check-inline&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span class=&quot;form-check-label&quot;
            &gt;2&lt;/span
        &gt;&lt;/label
    &gt;&lt;label class=&quot;form-check form-check-inline&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; disabled=&quot;&quot; /&gt;&lt;span
            class=&quot;form-check-label&quot;
            &gt;3 (disabled)&lt;/span
        &gt;&lt;/label
    &gt;
&lt;/div&gt;
&lt;div class=&quot;mt-2&quot;&gt;
    &lt;label class=&quot;form-check form-check-inline&quot;
        &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;exampleRadio3&quot; /&gt;&lt;span
            class=&quot;form-check-label&quot;
            &gt;1&lt;/span
        &gt;&lt;/label
    &gt;&lt;label class=&quot;form-check form-check-inline&quot;
        &gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; name=&quot;exampleRadio3&quot; /&gt;&lt;span
            class=&quot;form-check-label&quot;
            &gt;2&lt;/span
        &gt;&lt;/label
    &gt;&lt;label class=&quot;form-check form-check-inline&quot;
        &gt;&lt;input
            type=&quot;radio&quot;
            class=&quot;form-check-input&quot;
            name=&quot;exampleRadio3&quot;
            disabled=&quot;&quot;
        /&gt;&lt;span class=&quot;form-check-label&quot;&gt;3 (disabled)&lt;/span&gt;&lt;/label
    &gt;
&lt;/div&gt;
&lt;div class=&quot;mt-2&quot;&gt;
    &lt;label class=&quot;form-check form-switch form-check-inline&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span class=&quot;form-check-label&quot;
            &gt;1&lt;/span
        &gt;&lt;/label
    &gt;&lt;label class=&quot;form-check form-switch form-check-inline&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; /&gt;&lt;span class=&quot;form-check-label&quot;
            &gt;2&lt;/span
        &gt;&lt;/label
    &gt;&lt;label class=&quot;form-check form-switch form-check-inline&quot;
        &gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; disabled=&quot;&quot; /&gt;&lt;span
            class=&quot;form-check-label&quot;
            &gt;3 (disabled)&lt;/span
        &gt;&lt;/label
    &gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-without-labels" class="sa-anchor"><span class="sa-anchor__body">Without labels<a class="sa-anchor__link" href="#article-without-labels">#</a></span></h2>
                 <p>Omit the wrapping <code>.form-check</code> for checkboxes and radios that have no label text. Remember to still provide some form of accessible name for assistive technologies (for instance, using <code>aria-label</code>).</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <div><input type="checkbox" class="form-check-input" aria-label="..." /></div>
                         <div class="mt-2"><input type="radio" class="form-check-input" aria-label="..." /></div>
                         <div class="mt-2"><input type="checkbox" class="form-check-input form-switch-without-label" aria-label="..." /></div>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                     <div class="sa-example__code collapse" id="example-6">
                         <pre><code class="language-html">&lt;div&gt;&lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; aria-label=&quot;...&quot; /&gt;&lt;/div&gt;
&lt;div class=&quot;mt-2&quot;&gt;&lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; aria-label=&quot;...&quot; /&gt;&lt;/div&gt;
&lt;div class=&quot;mt-2&quot;&gt;
    &lt;input
        type=&quot;checkbox&quot;
        class=&quot;form-check-input form-switch-without-label&quot;
        aria-label=&quot;...&quot;
    /&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div><!-- sa-app__body / end -->