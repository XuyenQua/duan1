<!-- sa-app__body -->
<div id="top" class="sa-app__body">
  <div class="sa-article sa-article--has-toc">
    <div class="sa-article__container container container--max--lg">
      <div class="sa-article__header">
        <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-sa-simple">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">
              DataTables
            </li>
          </ol>
        </nav>
        <h1 class="sa-article__title">DataTables</h1>
        <div class="sa-article__subtitle">
          DataTables is a table enhancing plug-in for the jQuery, adding
          sorting, paging and filtering abilities to plain HTML tables with
          minimal effort.
        </div>
      </div>
      <div class="sa-toc sa-article__toc">
        <div class="sa-toc__container">
          <div class="sa-toc__head">
            <a class="sa-toc__link" href="#top">Table of Content</a>
          </div>
          <ul class="sa-toc__list">
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-basic-example"
                >Basic Example</a
              >
              <ul class="sa-toc__list"></ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="sa-article__content">
        <h2 id="article-basic-example" class="sa-anchor">
          <span class="sa-anchor__body"
            >Basic Example<a
              class="sa-anchor__link"
              href="#article-basic-example"
              >#</a
            ></span
          >
        </h2>
        <p>
          DataTables has most features enabled by default, so all you need to do
          to use it with your own tables is to call the construction function:
          <code>$().DataTable();</code>.
        </p>
        <p>
          Searching, ordering and paging goodness will be immediately added to
          the table, as shown in this example.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <table class="sa-datatables-init" data-order='[[ 0, "asc" ]]'>
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                  </tr>
                  <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                  </tr>
                  <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                  </tr>
                  <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                  </tr>
                  <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                  </tr>
                  <tr>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                  </tr>
                  <tr>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                  </tr>
                  <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                  </tr>
                  <tr>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                  </tr>
                  <tr>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                  </tr>
                  <tr>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                  </tr>
                  <tr>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                  </tr>
                  <tr>
                    <td>Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                    <td>$217,500</td>
                  </tr>
                  <tr>
                    <td>Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                    <td>$345,000</td>
                  </tr>
                  <tr>
                    <td>Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                    <td>$675,000</td>
                  </tr>
                  <tr>
                    <td>Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                    <td>$106,450</td>
                  </tr>
                  <tr>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Sydney</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                    <td>$85,600</td>
                  </tr>
                  <tr>
                    <td>Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2009/10/09</td>
                    <td>$1,200,000</td>
                  </tr>
                  <tr>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                    <td>$92,575</td>
                  </tr>
                  <tr>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>Singapore</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                    <td>$357,650</td>
                  </tr>
                  <tr>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>28</td>
                    <td>2011/06/07</td>
                    <td>$206,850</td>
                  </tr>
                  <tr>
                    <td>Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                    <td>$850,000</td>
                  </tr>
                  <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
                  </tr>
                  <tr>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sydney</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                    <td>$95,400</td>
                  </tr>
                  <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                    <td>$114,500</td>
                  </tr>
                  <tr>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                    <td>$145,000</td>
                  </tr>
                  <tr>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                    <td>$235,500</td>
                  </tr>
                  <tr>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                    <td>$324,050</td>
                  </tr>
                  <tr>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                    <td>$85,675</td>
                  </tr>
                  <tr>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                  </tr>
                  <tr>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                  </tr>
                  <tr>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                  </tr>
                  <tr>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td>$136,200</td>
                  </tr>
                  <tr>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td>$645,750</td>
                  </tr>
                  <tr>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td>$234,500</td>
                  </tr>
                  <tr>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                    <td>$163,500</td>
                  </tr>
                  <tr>
                    <td>Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>Tokyo</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                    <td>$139,575</td>
                  </tr>
                  <tr>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    <td>$98,540</td>
                  </tr>
                  <tr>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                    <td>$87,500</td>
                  </tr>
                  <tr>
                    <td>Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                    <td>$138,575</td>
                  </tr>
                  <tr>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                    <td>$125,250</td>
                  </tr>
                  <tr>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                    <td>$115,000</td>
                  </tr>
                  <tr>
                    <td>Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                    <td>$75,650</td>
                  </tr>
                  <tr>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                    <td>$145,600</td>
                  </tr>
                  <tr>
                    <td>Hermione Butler</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                    <td>$356,250</td>
                  </tr>
                  <tr>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                    <td>$103,500</td>
                  </tr>
                  <tr>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                    <td>$86,500</td>
                  </tr>
                  <tr>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                    <td>$183,000</td>
                  </tr>
                  <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td>$183,000</td>
                  </tr>
                  <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-1"
            aria-expanded="false"
            aria-controls="example-1"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-1">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;table class=&quot;sa-datatables-init&quot; data-order=&#x27;[[ 0, &quot;asc&quot; ]]&#x27;&gt;
&lt;thead&gt;
&lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Position&lt;/th&gt;
    &lt;th&gt;Office&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
    &lt;th&gt;Start date&lt;/th&gt;
    &lt;th&gt;Salary&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
    &lt;td&gt;Tiger Nixon&lt;/td&gt;
    &lt;td&gt;System Architect&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;61&lt;/td&gt;
    &lt;td&gt;2011/04/25&lt;/td&gt;
    &lt;td&gt;$320,800&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Garrett Winters&lt;/td&gt;
    &lt;td&gt;Accountant&lt;/td&gt;
    &lt;td&gt;Tokyo&lt;/td&gt;
    &lt;td&gt;63&lt;/td&gt;
    &lt;td&gt;2011/07/25&lt;/td&gt;
    &lt;td&gt;$170,750&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Ashton Cox&lt;/td&gt;
    &lt;td&gt;Junior Technical Author&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;66&lt;/td&gt;
    &lt;td&gt;2009/01/12&lt;/td&gt;
    &lt;td&gt;$86,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Cedric Kelly&lt;/td&gt;
    &lt;td&gt;Senior Javascript Developer&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;22&lt;/td&gt;
    &lt;td&gt;2012/03/29&lt;/td&gt;
    &lt;td&gt;$433,060&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Airi Satou&lt;/td&gt;
    &lt;td&gt;Accountant&lt;/td&gt;
    &lt;td&gt;Tokyo&lt;/td&gt;
    &lt;td&gt;33&lt;/td&gt;
    &lt;td&gt;2008/11/28&lt;/td&gt;
    &lt;td&gt;$162,700&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Brielle Williamson&lt;/td&gt;
    &lt;td&gt;Integration Specialist&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;61&lt;/td&gt;
    &lt;td&gt;2012/12/02&lt;/td&gt;
    &lt;td&gt;$372,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Herrod Chandler&lt;/td&gt;
    &lt;td&gt;Sales Assistant&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;59&lt;/td&gt;
    &lt;td&gt;2012/08/06&lt;/td&gt;
    &lt;td&gt;$137,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Rhona Davidson&lt;/td&gt;
    &lt;td&gt;Integration Specialist&lt;/td&gt;
    &lt;td&gt;Tokyo&lt;/td&gt;
    &lt;td&gt;55&lt;/td&gt;
    &lt;td&gt;2010/10/14&lt;/td&gt;
    &lt;td&gt;$327,900&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Colleen Hurst&lt;/td&gt;
    &lt;td&gt;Javascript Developer&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;39&lt;/td&gt;
    &lt;td&gt;2009/09/15&lt;/td&gt;
    &lt;td&gt;$205,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Sonya Frost&lt;/td&gt;
    &lt;td&gt;Software Engineer&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;23&lt;/td&gt;
    &lt;td&gt;2008/12/13&lt;/td&gt;
    &lt;td&gt;$103,600&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Jena Gaines&lt;/td&gt;
    &lt;td&gt;Office Manager&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
    &lt;td&gt;2008/12/19&lt;/td&gt;
    &lt;td&gt;$90,560&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Quinn Flynn&lt;/td&gt;
    &lt;td&gt;Support Lead&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;22&lt;/td&gt;
    &lt;td&gt;2013/03/03&lt;/td&gt;
    &lt;td&gt;$342,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Charde Marshall&lt;/td&gt;
    &lt;td&gt;Regional Director&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;36&lt;/td&gt;
    &lt;td&gt;2008/10/16&lt;/td&gt;
    &lt;td&gt;$470,600&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Haley Kennedy&lt;/td&gt;
    &lt;td&gt;Senior Marketing Designer&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;43&lt;/td&gt;
    &lt;td&gt;2012/12/18&lt;/td&gt;
    &lt;td&gt;$313,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Tatyana Fitzpatrick&lt;/td&gt;
    &lt;td&gt;Regional Director&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;19&lt;/td&gt;
    &lt;td&gt;2010/03/17&lt;/td&gt;
    &lt;td&gt;$385,750&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Michael Silva&lt;/td&gt;
    &lt;td&gt;Marketing Designer&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;66&lt;/td&gt;
    &lt;td&gt;2012/11/27&lt;/td&gt;
    &lt;td&gt;$198,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Paul Byrd&lt;/td&gt;
    &lt;td&gt;Chief Financial Officer (CFO)&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;64&lt;/td&gt;
    &lt;td&gt;2010/06/09&lt;/td&gt;
    &lt;td&gt;$725,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Gloria Little&lt;/td&gt;
    &lt;td&gt;Systems Administrator&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;59&lt;/td&gt;
    &lt;td&gt;2009/04/10&lt;/td&gt;
    &lt;td&gt;$237,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Bradley Greer&lt;/td&gt;
    &lt;td&gt;Software Engineer&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;41&lt;/td&gt;
    &lt;td&gt;2012/10/13&lt;/td&gt;
    &lt;td&gt;$132,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Dai Rios&lt;/td&gt;
    &lt;td&gt;Personnel Lead&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;35&lt;/td&gt;
    &lt;td&gt;2012/09/26&lt;/td&gt;
    &lt;td&gt;$217,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Jenette Caldwell&lt;/td&gt;
    &lt;td&gt;Development Lead&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
    &lt;td&gt;2011/09/03&lt;/td&gt;
    &lt;td&gt;$345,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Yuri Berry&lt;/td&gt;
    &lt;td&gt;Chief Marketing Officer (CMO)&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;40&lt;/td&gt;
    &lt;td&gt;2009/06/25&lt;/td&gt;
    &lt;td&gt;$675,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Caesar Vance&lt;/td&gt;
    &lt;td&gt;Pre-Sales Support&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;21&lt;/td&gt;
    &lt;td&gt;2011/12/12&lt;/td&gt;
    &lt;td&gt;$106,450&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Doris Wilder&lt;/td&gt;
    &lt;td&gt;Sales Assistant&lt;/td&gt;
    &lt;td&gt;Sydney&lt;/td&gt;
    &lt;td&gt;23&lt;/td&gt;
    &lt;td&gt;2010/09/20&lt;/td&gt;
    &lt;td&gt;$85,600&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Angelica Ramos&lt;/td&gt;
    &lt;td&gt;Chief Executive Officer (CEO)&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;47&lt;/td&gt;
    &lt;td&gt;2009/10/09&lt;/td&gt;
    &lt;td&gt;$1,200,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Gavin Joyce&lt;/td&gt;
    &lt;td&gt;Developer&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;42&lt;/td&gt;
    &lt;td&gt;2010/12/22&lt;/td&gt;
    &lt;td&gt;$92,575&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Jennifer Chang&lt;/td&gt;
    &lt;td&gt;Regional Director&lt;/td&gt;
    &lt;td&gt;Singapore&lt;/td&gt;
    &lt;td&gt;28&lt;/td&gt;
    &lt;td&gt;2010/11/14&lt;/td&gt;
    &lt;td&gt;$357,650&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Brenden Wagner&lt;/td&gt;
    &lt;td&gt;Software Engineer&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;28&lt;/td&gt;
    &lt;td&gt;2011/06/07&lt;/td&gt;
    &lt;td&gt;$206,850&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Fiona Green&lt;/td&gt;
    &lt;td&gt;Chief Operating Officer (COO)&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;48&lt;/td&gt;
    &lt;td&gt;2010/03/11&lt;/td&gt;
    &lt;td&gt;$850,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Shou Itou&lt;/td&gt;
    &lt;td&gt;Regional Marketing&lt;/td&gt;
    &lt;td&gt;Tokyo&lt;/td&gt;
    &lt;td&gt;20&lt;/td&gt;
    &lt;td&gt;2011/08/14&lt;/td&gt;
    &lt;td&gt;$163,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Michelle House&lt;/td&gt;
    &lt;td&gt;Integration Specialist&lt;/td&gt;
    &lt;td&gt;Sydney&lt;/td&gt;
    &lt;td&gt;37&lt;/td&gt;
    &lt;td&gt;2011/06/02&lt;/td&gt;
    &lt;td&gt;$95,400&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Suki Burks&lt;/td&gt;
    &lt;td&gt;Developer&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;53&lt;/td&gt;
    &lt;td&gt;2009/10/22&lt;/td&gt;
    &lt;td&gt;$114,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Prescott Bartlett&lt;/td&gt;
    &lt;td&gt;Technical Author&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;27&lt;/td&gt;
    &lt;td&gt;2011/05/07&lt;/td&gt;
    &lt;td&gt;$145,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Gavin Cortez&lt;/td&gt;
    &lt;td&gt;Team Leader&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;22&lt;/td&gt;
    &lt;td&gt;2008/10/26&lt;/td&gt;
    &lt;td&gt;$235,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Martena Mccray&lt;/td&gt;
    &lt;td&gt;Post-Sales support&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;46&lt;/td&gt;
    &lt;td&gt;2011/03/09&lt;/td&gt;
    &lt;td&gt;$324,050&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Unity Butler&lt;/td&gt;
    &lt;td&gt;Marketing Designer&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;47&lt;/td&gt;
    &lt;td&gt;2009/12/09&lt;/td&gt;
    &lt;td&gt;$85,675&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Howard Hatfield&lt;/td&gt;
    &lt;td&gt;Office Manager&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;51&lt;/td&gt;
    &lt;td&gt;2008/12/16&lt;/td&gt;
    &lt;td&gt;$164,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Hope Fuentes&lt;/td&gt;
    &lt;td&gt;Secretary&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;41&lt;/td&gt;
    &lt;td&gt;2010/02/12&lt;/td&gt;
    &lt;td&gt;$109,850&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Vivian Harrell&lt;/td&gt;
    &lt;td&gt;Financial Controller&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;62&lt;/td&gt;
    &lt;td&gt;2009/02/14&lt;/td&gt;
    &lt;td&gt;$452,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Timothy Mooney&lt;/td&gt;
    &lt;td&gt;Office Manager&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;37&lt;/td&gt;
    &lt;td&gt;2008/12/11&lt;/td&gt;
    &lt;td&gt;$136,200&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Jackson Bradshaw&lt;/td&gt;
    &lt;td&gt;Director&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;65&lt;/td&gt;
    &lt;td&gt;2008/09/26&lt;/td&gt;
    &lt;td&gt;$645,750&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Olivia Liang&lt;/td&gt;
    &lt;td&gt;Support Engineer&lt;/td&gt;
    &lt;td&gt;Singapore&lt;/td&gt;
    &lt;td&gt;64&lt;/td&gt;
    &lt;td&gt;2011/02/03&lt;/td&gt;
    &lt;td&gt;$234,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Bruno Nash&lt;/td&gt;
    &lt;td&gt;Software Engineer&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;38&lt;/td&gt;
    &lt;td&gt;2011/05/03&lt;/td&gt;
    &lt;td&gt;$163,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Sakura Yamamoto&lt;/td&gt;
    &lt;td&gt;Support Engineer&lt;/td&gt;
    &lt;td&gt;Tokyo&lt;/td&gt;
    &lt;td&gt;37&lt;/td&gt;
    &lt;td&gt;2009/08/19&lt;/td&gt;
    &lt;td&gt;$139,575&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Thor Walton&lt;/td&gt;
    &lt;td&gt;Developer&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;61&lt;/td&gt;
    &lt;td&gt;2013/08/11&lt;/td&gt;
    &lt;td&gt;$98,540&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Finn Camacho&lt;/td&gt;
    &lt;td&gt;Support Engineer&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;47&lt;/td&gt;
    &lt;td&gt;2009/07/07&lt;/td&gt;
    &lt;td&gt;$87,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Serge Baldwin&lt;/td&gt;
    &lt;td&gt;Data Coordinator&lt;/td&gt;
    &lt;td&gt;Singapore&lt;/td&gt;
    &lt;td&gt;64&lt;/td&gt;
    &lt;td&gt;2012/04/09&lt;/td&gt;
    &lt;td&gt;$138,575&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Zenaida Frank&lt;/td&gt;
    &lt;td&gt;Software Engineer&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;63&lt;/td&gt;
    &lt;td&gt;2010/01/04&lt;/td&gt;
    &lt;td&gt;$125,250&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Zorita Serrano&lt;/td&gt;
    &lt;td&gt;Software Engineer&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;56&lt;/td&gt;
    &lt;td&gt;2012/06/01&lt;/td&gt;
    &lt;td&gt;$115,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Jennifer Acosta&lt;/td&gt;
    &lt;td&gt;Junior Javascript Developer&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;43&lt;/td&gt;
    &lt;td&gt;2013/02/01&lt;/td&gt;
    &lt;td&gt;$75,650&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Cara Stevens&lt;/td&gt;
    &lt;td&gt;Sales Assistant&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;46&lt;/td&gt;
    &lt;td&gt;2011/12/06&lt;/td&gt;
    &lt;td&gt;$145,600&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Hermione Butler&lt;/td&gt;
    &lt;td&gt;Regional Director&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;47&lt;/td&gt;
    &lt;td&gt;2011/03/21&lt;/td&gt;
    &lt;td&gt;$356,250&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Lael Greer&lt;/td&gt;
    &lt;td&gt;Systems Administrator&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
    &lt;td&gt;21&lt;/td&gt;
    &lt;td&gt;2009/02/27&lt;/td&gt;
    &lt;td&gt;$103,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Jonas Alexander&lt;/td&gt;
    &lt;td&gt;Developer&lt;/td&gt;
    &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
    &lt;td&gt;2010/07/14&lt;/td&gt;
    &lt;td&gt;$86,500&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Shad Decker&lt;/td&gt;
    &lt;td&gt;Regional Director&lt;/td&gt;
    &lt;td&gt;Edinburgh&lt;/td&gt;
    &lt;td&gt;51&lt;/td&gt;
    &lt;td&gt;2008/11/13&lt;/td&gt;
    &lt;td&gt;$183,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Michael Bruce&lt;/td&gt;
    &lt;td&gt;Javascript Developer&lt;/td&gt;
    &lt;td&gt;Singapore&lt;/td&gt;
    &lt;td&gt;29&lt;/td&gt;
    &lt;td&gt;2011/06/27&lt;/td&gt;
    &lt;td&gt;$183,000&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Donna Snider&lt;/td&gt;
    &lt;td&gt;Customer Support&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
    &lt;td&gt;27&lt;/td&gt;
    &lt;td&gt;2011/01/25&lt;/td&gt;
    &lt;td&gt;$112,000&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-1"
              aria-expanded="false"
              aria-controls="example-1"
            >
              Source Code
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sa-app__body / end -->
