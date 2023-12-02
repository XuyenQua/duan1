 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="sa-article sa-article--has-toc">
         <div class="sa-article__container container container--max--md">
             <div class="sa-article__header">
                 <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                     <ol class="breadcrumb breadcrumb-sa-simple">
                         <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Forms</li>
                         <li class="breadcrumb-item active" aria-current="page">Validation</li>
                     </ol>
                 </nav>
                 <h1 class="sa-article__title">Validation</h1>
                 <div class="sa-article__subtitle">Provide valuable, actionable feedback to your users with HTML5 form validation, via browser default behaviors or custom styles and JavaScript.</div>
             </div>
             <div class="sa-toc sa-article__toc">
                 <div class="sa-toc__container">
                     <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                     <ul class="sa-toc__list">
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-custom-styles">Custom Styles</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-browser-defaults">Browser Defaults</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-server-side">Server Side</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-supported-elements">Supported Elements</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                         <li class="sa-toc__item"><a class="sa-toc__link" href="#article-tooltips">Tooltips</a>
                             <ul class="sa-toc__list"></ul>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="sa-article__content">
                 <h2 id="article-custom-styles" class="sa-anchor"><span class="sa-anchor__body">Custom Styles<a class="sa-anchor__link" href="#article-custom-styles">#</a></span></h2>
                 <p>For custom Bootstrap form validation messages, you&#x27;ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you. When attempting to submit, you&#x27;ll see the <code>:invalid</code> and <code>:valid</code> styles applied to your form controls.</p>
                 <p>Custom feedback styles apply custom colors, borders, and focus styles to better communicate feedback.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <form class="row g-4 needs-validation" novalidate="">
                             <div class="col-md-4"><label for="validationCustom01" class="form-label">First name</label><input type="text" class="form-control" id="validationCustom01" required="" value="Mark" />
                                 <div class="valid-feedback">Looks good!</div>
                             </div>
                             <div class="col-md-4"><label for="validationCustom02" class="form-label">Last name</label><input type="text" class="form-control" id="validationCustom02" required="" value="Otto" />
                                 <div class="valid-feedback">Looks good!</div>
                             </div>
                             <div class="col-md-4"><label for="validationCustomUsername" class="form-label">Username</label>
                                 <div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend">@</span><input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required="" />
                                     <div class="invalid-feedback">Please choose a username.</div>
                                 </div>
                             </div>
                             <div class="col-md-6"><label for="validationCustom03" class="form-label">City</label><input type="text" class="form-control" id="validationCustom03" required="" />
                                 <div class="invalid-feedback">Please provide a valid city.</div>
                             </div>
                             <div class="col-md-3"><label for="validationCustom04" class="form-label">State</label><select class="form-select" id="validationCustom04" required="">
                                     <option selected="" disabled="" value="">Choose...</option>
                                     <option>...</option>
                                 </select>
                                 <div class="invalid-feedback">Please select a valid state.</div>
                             </div>
                             <div class="col-md-3"><label for="validationCustom05" class="form-label">Zip</label><input type="text" class="form-control" id="validationCustom05" required="" />
                                 <div class="invalid-feedback">Please provide a valid zip.</div>
                             </div>
                             <div class="col-12">
                                 <div class="form-check"><input type="checkbox" class="form-check-input" id="invalidCheck" required="" value="" /><label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                     <div class="invalid-feedback">You must agree before submitting.</div>
                                 </div>
                             </div>
                             <div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div>
                         </form>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                     <div class="sa-example__code collapse" id="example-1">
                         <pre><code class="language-html">&lt;form class=&quot;row g-4 needs-validation&quot; novalidate=&quot;&quot;&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationCustom01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;validationCustom01&quot;
            required=&quot;&quot;
            value=&quot;Mark&quot;
        /&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationCustom02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;validationCustom02&quot;
            required=&quot;&quot;
            value=&quot;Otto&quot;
        /&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationCustomUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group has-validation&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend&quot;&gt;@&lt;/span
            &gt;&lt;input
                type=&quot;text&quot;
                class=&quot;form-control&quot;
                id=&quot;validationCustomUsername&quot;
                aria-describedby=&quot;inputGroupPrepend&quot;
                required=&quot;&quot;
            /&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;Please choose a username.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;label for=&quot;validationCustom03&quot; class=&quot;form-label&quot;&gt;City&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom03&quot; required=&quot;&quot; /&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid city.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationCustom04&quot; class=&quot;form-label&quot;&gt;State&lt;/label
        &gt;&lt;select class=&quot;form-select&quot; id=&quot;validationCustom04&quot; required=&quot;&quot;&gt;
            &lt;option selected=&quot;&quot; disabled=&quot;&quot; value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Please select a valid state.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationCustom05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom05&quot; required=&quot;&quot; /&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid zip.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input
                type=&quot;checkbox&quot;
                class=&quot;form-check-input&quot;
                id=&quot;invalidCheck&quot;
                required=&quot;&quot;
                value=&quot;&quot;
            /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck&quot;
                &gt;Agree to terms and conditions&lt;/label
            &gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;You must agree before submitting.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-browser-defaults" class="sa-anchor"><span class="sa-anchor__body">Browser Defaults<a class="sa-anchor__link" href="#article-browser-defaults">#</a></span></h2>
                 <p>Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you&#x27;ll see a slightly different style of feedback.</p>
                 <p>While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <form class="row g-4">
                             <div class="col-md-4"><label for="validationDefault01" class="form-label">First name</label><input type="text" class="form-control" id="validationDefault01" required="" value="Mark" /></div>
                             <div class="col-md-4"><label for="validationDefault02" class="form-label">Last name</label><input type="text" class="form-control" id="validationDefault02" required="" value="Otto" /></div>
                             <div class="col-md-4"><label for="validationDefaultUsername" class="form-label">Username</label>
                                 <div class="input-group"><span class="input-group-text" id="inputGroupPrepend2">@</span><input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required="" /></div>
                             </div>
                             <div class="col-md-6"><label for="validationDefault03" class="form-label">City</label><input type="text" class="form-control" id="validationDefault03" required="" /></div>
                             <div class="col-md-3"><label for="validationDefault04" class="form-label">State</label><select class="form-select" id="validationDefault04" required="">
                                     <option selected="" disabled="" value="">Choose...</option>
                                     <option>...</option>
                                 </select></div>
                             <div class="col-md-3"><label for="validationDefault05" class="form-label">Zip</label><input type="text" class="form-control" id="validationDefault05" required="" /></div>
                             <div class="col-12">
                                 <div class="form-check"><input type="checkbox" class="form-check-input" id="invalidCheck2" required="" value="" /><label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label></div>
                             </div>
                             <div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div>
                         </form>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                     <div class="sa-example__code collapse" id="example-2">
                         <pre><code class="language-html">&lt;form class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationDefault01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;validationDefault01&quot;
            required=&quot;&quot;
            value=&quot;Mark&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationDefault02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;validationDefault02&quot;
            required=&quot;&quot;
            value=&quot;Otto&quot;
        /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationDefaultUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend2&quot;&gt;@&lt;/span
            &gt;&lt;input
                type=&quot;text&quot;
                class=&quot;form-control&quot;
                id=&quot;validationDefaultUsername&quot;
                aria-describedby=&quot;inputGroupPrepend2&quot;
                required=&quot;&quot;
            /&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;label for=&quot;validationDefault03&quot; class=&quot;form-label&quot;&gt;City&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault03&quot; required=&quot;&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationDefault04&quot; class=&quot;form-label&quot;&gt;State&lt;/label
        &gt;&lt;select class=&quot;form-select&quot; id=&quot;validationDefault04&quot; required=&quot;&quot;&gt;
            &lt;option selected=&quot;&quot; disabled=&quot;&quot; value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationDefault05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault05&quot; required=&quot;&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input
                type=&quot;checkbox&quot;
                class=&quot;form-check-input&quot;
                id=&quot;invalidCheck2&quot;
                required=&quot;&quot;
                value=&quot;&quot;
            /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck2&quot;
                &gt;Agree to terms and conditions&lt;/label
            &gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-server-side" class="sa-anchor"><span class="sa-anchor__body">Server Side<a class="sa-anchor__link" href="#article-server-side">#</a></span></h2>
                 <p>We recommend using client-side validation, but in case you require server-side validation, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
                 <p>For invalid fields, ensure that the invalid feedback/error message is associated with the relevant form field using <code>aria-describedby</code> (noting that this attribute allows more than one <code>id</code> to be referenced, in case the field already points to additional form text).</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <form class="row g-4">
                             <div class="col-md-4"><label for="validationServer01" class="form-label">First name</label><input type="text" class="form-control is-valid" id="validationServer01" required="" value="Mark" />
                                 <div class="valid-feedback">Looks good!</div>
                             </div>
                             <div class="col-md-4"><label for="validationServer02" class="form-label">Last name</label><input type="text" class="form-control is-valid" id="validationServer02" required="" value="Otto" />
                                 <div class="valid-feedback">Looks good!</div>
                             </div>
                             <div class="col-md-4"><label for="validationServerUsername" class="form-label">Username</label>
                                 <div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend3">@</span><input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="" />
                                     <div id="validationServerUsernameFeedback" class="invalid-feedback">Please choose a username.</div>
                                 </div>
                             </div>
                             <div class="col-md-6"><label for="validationServer03" class="form-label">City</label><input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required="" />
                                 <div id="validationServer03Feedback" class="invalid-feedback">Please provide a valid city.</div>
                             </div>
                             <div class="col-md-3"><label for="validationServer04" class="form-label">State</label><select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required="">
                                     <option selected="" disabled="" value="">Choose...</option>
                                     <option>...</option>
                                 </select>
                                 <div id="validationServer04Feedback" class="invalid-feedback">Please select a valid state.</div>
                             </div>
                             <div class="col-md-3"><label for="validationServer05" class="form-label">Zip</label><input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required="" />
                                 <div id="validationServer05Feedback" class="invalid-feedback">Please provide a valid zip.</div>
                             </div>
                             <div class="col-12">
                                 <div class="form-check"><input type="checkbox" class="form-check-input is-invalid" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required="" value="" /><label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
                                     <div id="invalidCheck3Feedback" class="invalid-feedback">You must agree before submitting.</div>
                                 </div>
                             </div>
                             <div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div>
                         </form>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                     <div class="sa-example__code collapse" id="example-3">
                         <pre><code class="language-html">&lt;form class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationServer01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control is-valid&quot;
            id=&quot;validationServer01&quot;
            required=&quot;&quot;
            value=&quot;Mark&quot;
        /&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationServer02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control is-valid&quot;
            id=&quot;validationServer02&quot;
            required=&quot;&quot;
            value=&quot;Otto&quot;
        /&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationServerUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group has-validation&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend3&quot;&gt;@&lt;/span
            &gt;&lt;input
                type=&quot;text&quot;
                class=&quot;form-control is-invalid&quot;
                id=&quot;validationServerUsername&quot;
                aria-describedby=&quot;inputGroupPrepend3 validationServerUsernameFeedback&quot;
                required=&quot;&quot;
            /&gt;
            &lt;div id=&quot;validationServerUsernameFeedback&quot; class=&quot;invalid-feedback&quot;&gt;
                Please choose a username.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;label for=&quot;validationServer03&quot; class=&quot;form-label&quot;&gt;City&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control is-invalid&quot;
            id=&quot;validationServer03&quot;
            aria-describedby=&quot;validationServer03Feedback&quot;
            required=&quot;&quot;
        /&gt;
        &lt;div id=&quot;validationServer03Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
            Please provide a valid city.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationServer04&quot; class=&quot;form-label&quot;&gt;State&lt;/label
        &gt;&lt;select
            class=&quot;form-select is-invalid&quot;
            id=&quot;validationServer04&quot;
            aria-describedby=&quot;validationServer04Feedback&quot;
            required=&quot;&quot;
        &gt;
            &lt;option selected=&quot;&quot; disabled=&quot;&quot; value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div id=&quot;validationServer04Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
            Please select a valid state.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationServer05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control is-invalid&quot;
            id=&quot;validationServer05&quot;
            aria-describedby=&quot;validationServer05Feedback&quot;
            required=&quot;&quot;
        /&gt;
        &lt;div id=&quot;validationServer05Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
            Please provide a valid zip.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input
                type=&quot;checkbox&quot;
                class=&quot;form-check-input is-invalid&quot;
                id=&quot;invalidCheck3&quot;
                aria-describedby=&quot;invalidCheck3Feedback&quot;
                required=&quot;&quot;
                value=&quot;&quot;
            /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck3&quot;
                &gt;Agree to terms and conditions&lt;/label
            &gt;
            &lt;div id=&quot;invalidCheck3Feedback&quot; class=&quot;invalid-feedback&quot;&gt;
                You must agree before submitting.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-supported-elements" class="sa-anchor"><span class="sa-anchor__body">Supported Elements<a class="sa-anchor__link" href="#article-supported-elements">#</a></span></h2>
                 <p>Validation styles are available for the following form controls and components:</p>
                 <ul>
                     <li><code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s with <code>.form-control</code> (including up to one <code>.form-control</code> in input groups)</li>
                     <li><code>&lt;select&gt;</code>s with <code>.form-select</code></li>
                     <li><code>.form-check</code>s</li>
                 </ul>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <form class="was-validated">
                             <div class="mb-4"><label for="validationTextarea" class="form-label">Textarea</label><textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required=""></textarea>
                                 <div class="invalid-feedback">Please enter a message in the textarea.</div>
                             </div>
                             <div class="form-check mb-4"><input type="checkbox" class="form-check-input" id="validationFormCheck1" required="" /><label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                                 <div class="invalid-feedback">Example invalid feedback text</div>
                             </div>
                             <div class="form-check"><input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required="" /><label class="form-check-label" for="validationFormCheck2">Toggle this radio</label></div>
                             <div class="form-check mb-4"><input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required="" /><label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                                 <div class="invalid-feedback">More example invalid feedback text</div>
                             </div>
                             <div class="mb-4"><select class="form-select" required="" aria-label="select example">
                                     <option value="">Open this select menu</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>
                                 <div class="invalid-feedback">Example invalid select feedback</div>
                             </div>
                             <div class="mb-4"><input type="file" class="form-control" aria-label="file example" required="" />
                                 <div class="invalid-feedback">Example invalid form file feedback</div>
                             </div>
                             <div><button class="btn btn-primary" type="submit" disabled="">Submit form</button></div>
                         </form>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                     <div class="sa-example__code collapse" id="example-4">
                         <pre><code class="language-html">&lt;form class=&quot;was-validated&quot;&gt;
    &lt;div class=&quot;mb-4&quot;&gt;
        &lt;label for=&quot;validationTextarea&quot; class=&quot;form-label&quot;&gt;Textarea&lt;/label
        &gt;&lt;textarea
            class=&quot;form-control is-invalid&quot;
            id=&quot;validationTextarea&quot;
            placeholder=&quot;Required example textarea&quot;
            required=&quot;&quot;
        &gt;&lt;/textarea&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Please enter a message in the textarea.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-check mb-4&quot;&gt;
        &lt;input
            type=&quot;checkbox&quot;
            class=&quot;form-check-input&quot;
            id=&quot;validationFormCheck1&quot;
            required=&quot;&quot;
        /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;validationFormCheck1&quot;
            &gt;Check this checkbox&lt;/label
        &gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-check&quot;&gt;
        &lt;input
            type=&quot;radio&quot;
            class=&quot;form-check-input&quot;
            id=&quot;validationFormCheck2&quot;
            name=&quot;radio-stacked&quot;
            required=&quot;&quot;
        /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;validationFormCheck2&quot;
            &gt;Toggle this radio&lt;/label
        &gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-check mb-4&quot;&gt;
        &lt;input
            type=&quot;radio&quot;
            class=&quot;form-check-input&quot;
            id=&quot;validationFormCheck3&quot;
            name=&quot;radio-stacked&quot;
            required=&quot;&quot;
        /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;validationFormCheck3&quot;
            &gt;Or toggle this other radio&lt;/label
        &gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;More example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-4&quot;&gt;
        &lt;select class=&quot;form-select&quot; required=&quot;&quot; aria-label=&quot;select example&quot;&gt;
            &lt;option value=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid select feedback&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-4&quot;&gt;
        &lt;input type=&quot;file&quot; class=&quot;form-control&quot; aria-label=&quot;file example&quot; required=&quot;&quot; /&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid form file feedback&lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot; disabled=&quot;&quot;&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                     </div>
                 </div>
                 <h2 id="article-tooltips" class="sa-anchor"><span class="sa-anchor__body">Tooltips<a class="sa-anchor__link" href="#article-tooltips">#</a></span></h2>
                 <p>If your form layout allows it, you can swap the <code>.{valid | invalid}-feedback</code> classes for <code>.{valid | invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code>position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</p>
                 <div class="sa-example my-5">
                     <div class="sa-example__legend">Example</div>
                     <div class="sa-example__body">
                         <form class="row g-4 needs-validation" novalidate="">
                             <div class="col-md-4 position-relative"><label for="validationTooltip01" class="form-label">First name</label><input type="text" class="form-control" id="validationTooltip01" required="" value="Mark" />
                                 <div class="valid-tooltip">Looks good!</div>
                             </div>
                             <div class="col-md-4 position-relative"><label for="validationTooltip02" class="form-label">Last name</label><input type="text" class="form-control" id="validationTooltip02" required="" value="Otto" />
                                 <div class="valid-tooltip">Looks good!</div>
                             </div>
                             <div class="col-md-4 position-relative"><label for="validationTooltipUsername" class="form-label">Username</label>
                                 <div class="input-group has-validation"><span class="input-group-text" id="validationTooltipUsernamePrepend">@</span><input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required="" />
                                     <div class="invalid-tooltip">Please choose a unique and valid username.</div>
                                 </div>
                             </div>
                             <div class="col-md-6 position-relative"><label for="validationTooltip03" class="form-label">City</label><input type="text" class="form-control" id="validationTooltip03" required="" />
                                 <div class="invalid-tooltip">Please provide a valid city.</div>
                             </div>
                             <div class="col-md-3 position-relative"><label for="validationTooltip04" class="form-label">State</label><select class="form-select" id="validationTooltip04" required="">
                                     <option selected="" disabled="" value="">Choose...</option>
                                     <option>...</option>
                                 </select>
                                 <div class="invalid-tooltip">Please select a valid state.</div>
                             </div>
                             <div class="col-md-3 position-relative"><label for="validationTooltip05" class="form-label">Zip</label><input type="text" class="form-control" id="validationTooltip05" required="" />
                                 <div class="invalid-tooltip">Please provide a valid zip.</div>
                             </div>
                             <div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div>
                         </form>
                     </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                     <div class="sa-example__code collapse" id="example-5">
                         <pre><code class="language-html">&lt;form class=&quot;row g-4 needs-validation&quot; novalidate=&quot;&quot;&gt;
    &lt;div class=&quot;col-md-4 position-relative&quot;&gt;
        &lt;label for=&quot;validationTooltip01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;validationTooltip01&quot;
            required=&quot;&quot;
            value=&quot;Mark&quot;
        /&gt;
        &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 position-relative&quot;&gt;
        &lt;label for=&quot;validationTooltip02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label
        &gt;&lt;input
            type=&quot;text&quot;
            class=&quot;form-control&quot;
            id=&quot;validationTooltip02&quot;
            required=&quot;&quot;
            value=&quot;Otto&quot;
        /&gt;
        &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 position-relative&quot;&gt;
        &lt;label for=&quot;validationTooltipUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group has-validation&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;validationTooltipUsernamePrepend&quot;&gt;@&lt;/span
            &gt;&lt;input
                type=&quot;text&quot;
                class=&quot;form-control&quot;
                id=&quot;validationTooltipUsername&quot;
                aria-describedby=&quot;validationTooltipUsernamePrepend&quot;
                required=&quot;&quot;
            /&gt;
            &lt;div class=&quot;invalid-tooltip&quot;&gt;Please choose a unique and valid username.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6 position-relative&quot;&gt;
        &lt;label for=&quot;validationTooltip03&quot; class=&quot;form-label&quot;&gt;City&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip03&quot; required=&quot;&quot; /&gt;
        &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid city.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 position-relative&quot;&gt;
        &lt;label for=&quot;validationTooltip04&quot; class=&quot;form-label&quot;&gt;State&lt;/label
        &gt;&lt;select class=&quot;form-select&quot; id=&quot;validationTooltip04&quot; required=&quot;&quot;&gt;
            &lt;option selected=&quot;&quot; disabled=&quot;&quot; value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;invalid-tooltip&quot;&gt;Please select a valid state.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 position-relative&quot;&gt;
        &lt;label for=&quot;validationTooltip05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label
        &gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip05&quot; required=&quot;&quot; /&gt;
        &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid zip.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div><!-- sa-app__body / end -->