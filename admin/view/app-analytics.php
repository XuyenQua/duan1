<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Analytics
                                </li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Analytics</h1>
                    </div>
                    <div class="col-auto d-flex">
                        <a href="#" class="btn btn-secondary me-3">Export</a><a href="#" class="btn btn-primary">Save</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="sa-chart-toolbar mb-5 mt-n2">
                        <div class="sa-chart-toolbar__body">
                            <div class="sa-chart-toolbar__item me-auto">
                                <label for="analytics/date-range" class="sa-chart-toolbar__item-label">Date
                                    range</label><select id="analytics/date-range" class="form-select form-select-sm sa-chart-toolbar__item-select">
                                    <option>Current month</option>
                                    <option selected="">Current year</option>
                                    <option>Last year</option>
                                    <option>[Custom]</option>
                                </select>
                                <div class="sa-chart-toolbar__item-range">
                                    <input type="text" class="form-control form-control-sm datepicker-here" placeholder="Start date" data-auto-close="true" data-language="en" aria-label="Datepicker" />
                                    <div class="text-muted mx-3">
                                        <div class="sa-dash sa-dash--size--small"></div>
                                    </div>
                                    <input type="text" class="form-control form-control-sm datepicker-here" placeholder="End date" data-auto-close="true" data-language="en" aria-label="Datepicker" />
                                </div>
                            </div>
                            <div class="sa-chart-toolbar__item">
                                <label for="analytics/group-by" class="sa-chart-toolbar__item-label">Group
                                    by</label><select id="analytics/group-by" class="form-select form-select-sm">
                                    <option selected="">Day</option>
                                    <option>Month</option>
                                    <option>Year</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sa-box" data-sa-container-query='{"320":"sa-box--aspect-ratio--3:2","640":"sa-box--aspect-ratio--2:1","1080":"sa-box--aspect-ratio--3:1"}' data-sa-container-query-mode="bigger">
                        <div class="sa-box__body">
                            <div class="sa-box__container">
                                <canvas id="example-chart-js-analytics"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="p-4">
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" placeholder="Start typing to search" class="form-control form-control--search" />
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-secondary" disabled="">
                                Plot Rows
                            </button>
                        </div>
                    </div>
                </div>
                <div class="sa-divider"></div>
                <div class="table-responsive">
                    <table class="sa-datatables-init text-nowrap" data-order='[[ 2, "desc" ]]'>
                        <thead>
                            <tr>
                                <th class="w-min" data-orderable="false">
                                    <input type="checkbox" class="form-check-input" aria-label="..." />
                                </th>
                                <th>Browser</th>
                                <th>Users</th>
                                <th>Sessions</th>
                                <th>Bounce Rate</th>
                                <th>Orders</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input" aria-label="..." />
                                </td>
                                <td>Chrome</td>
                                <td>10,987</td>
                                <td>3,843</td>
                                <td>42.69%</td>
                                <td>7</td>
                                <td>$2,756</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input" aria-label="..." />
                                </td>
                                <td>Firefox</td>
                                <td>1,152</td>
                                <td>405</td>
                                <td>39.60%</td>
                                <td>12</td>
                                <td>$296</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input" aria-label="..." />
                                </td>
                                <td>Safari</td>
                                <td>699</td>
                                <td>253</td>
                                <td>47.36%</td>
                                <td>5</td>
                                <td>$571</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input" aria-label="..." />
                                </td>
                                <td>Edge</td>
                                <td>370</td>
                                <td>29</td>
                                <td>34.33%</td>
                                <td>2</td>
                                <td>$64</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input" aria-label="..." />
                                </td>
                                <td>Opera</td>
                                <td>27</td>
                                <td>4</td>
                                <td>12.76%</td>
                                <td>3</td>
                                <td>$103</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sa-app__body / end -->