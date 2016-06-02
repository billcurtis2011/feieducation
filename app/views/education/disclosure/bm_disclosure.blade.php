@section('content')
   <section id="main_content">
        <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">FEI</a></li>
            <li><a href="/{{Lang::get('header.programs')}}">{{Lang::get('header.menu_programs')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.business-management')}}">{{Lang::get('BM_program.heading_title')}}</a></li>
            <li class="active">Program Disclosure</li>
        </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                <h2>Business Mangement Program Disclosure Information</h2>
                <p>
                    The information below is published in compliance with 34 CFR Section 668.6(b) so prospective students may review.
                </p>
                <table border="0" style="width: 403px; height: 80px;">
                <tbody>
                <tr>
                    <td>
                        <p>
                            Institution Name:
                        </p>
                    </td>
                    <td>
                        <p>
                            Florida Education Institute
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            GE Program:
                        </p>
                    </td>
                    <td>
                        <p>
                            Business Management (Diploma)
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            SOC Code:
                        </p>
                    </td>
                    <td>
                        <p>
                            11.3011
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            OPEID:
                        </p>
                    </td>
                    <td>
                        <p>
                            036276
                        </p>
                    </td>
                </tr>
                </tbody>
                </table>
                <h3>Occupation:</h3>
                <p>
                    The SOC code reflects the Standard Occupational Classification for Business Management, which is the occupation this program generally prepares students to enter. For government data regarding this occupation, please navigate to: <a target="_blank" href="http://www.onetonline.org/link/summary/11-3011.00">http://www.onetonline.org/link/summary/11-3011.00</a>
                </p>
                <h3>On Time Graduation Rate:</h3>
                <p>
                    This rate reflects the percentage of graduates in the cohort period between January 1st, 2011 and&nbsp;December 31, 2011 who completed their program within 100 percent of the normal timeframe as described in the school catalog or enrollment agreement.
                </p>
                <h3>Placement Rate:</h3>
                <p>
                    Placement rate disclosed below reflects the percentage of graduates in the cohort period between January 1st, 2011 and&nbsp;December 31, 2011 who were available for employment and obtained employment in their field of study or related field after graduating from this program. Placement rates for programs are based on the requirements from our accrediting body, COE.
                </p>
                <h3>Tuition and Fees:</h3>
                <p>
                    The amounts listed herein reflect the current costs for students completing the program on time, including the estimated cost for books, supplies and fees.
                </p>
                <h3>Median Loan Debt:</h3>
                <p>
                    The median loan debt reflects the median loan debt incurred by students that have graduated from FEI programs disaggregated by loan types (i.e., Federal Student Loan, private educational loans and institutional financing plans) at the time of completion. Please keep in mind that this is a median number and the amount that will need to be borrowed will vary based on your individual circumstances. FEI always encourages their students to borrow conservatively to fund their educational goals.
                </p>
                <br>
                <div class="divider-line">
                    &nbsp;
                </div>
                <br>
                <h2>BUSINESS MANAGEMENT (Diploma)</h2>
                <p>
                    The median loan debt reflects the median loan debt incurred by students that have graduated from FEI programs disaggregated by loan types (i.e., Federal Student Loan, private educational loans and institutional financing plans) at the time of completion. Please keep in mind that this is a median number and the amount that will need to be borrowed will vary based on your individual circumstances. FEI always encourages their students to borrow conservatively to fund their educational goals.
                </p>
                <table border="0" style="width: 403px; height: 18px;">
                <tbody>
                <tr>
                    <td style="width: 150px;">
                        Tuition:
                    </td>
                    <td>
                        $14,800
                    </td>
                </tr>
                <tr>
                    <td>
                        Registration Fee:
                    </td>
                    <td>
                        $100
                    </td>
                </tr>
                <tr>
                    <td>
                        Books and Supplies
                    </td>
                    <td>
                        $500
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="height: 15px;">
                    </td>
                    <td valign="top">
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width: 200px;">
                        On-Time Graduation Rate:
                    </td>
                    <td valign="top">
                        0
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        Placement Rate:
                    </td>
                    <td valign="top">
                        0
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                    </td>
                    <td valign="top">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" valign="top">
                        <strong>Median Loan Debt:</strong>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        Title IV Loans
                    </td>
                    <td valign="top">
                        0
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        Private Educational Loans
                    </td>
                    <td valign="top">
                        0
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        Institutional
                    </td>
                    <td valign="top">
                        0
                    </td>
                </tr>
                </tbody>
                </table>
                </div>

                <aside class="col-md-4">
                    @include('includes.form-side')
                    @include('includes.bm-side')
                </aside> <!-- End col-md-4 -->
            </div>

        </div><!-- End container -->
    </section><!-- End main_content -->

@stop