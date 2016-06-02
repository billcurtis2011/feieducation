<!DOCTYPE html>
<html>
<head>
<title>Florida Education Institute</title>

<!-- Include the header -->
@include('emails.email-header')
<!-- Include the header -->

<!-- #CONTENT
        ================================================== -->
<tr>
    <td class="w640" width="640" height="30" bgcolor="#ffffff">
    </td>
</tr>
<tr id="simple-content-row">
    <td class="w640" width="640" bgcolor="#ffffff">
        <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
        <tbody>
        <tr>
            <td class="w30" width="30">
            </td>
            <td class="w580" width="580" id="content-column">
                <!-- #TEXT ONLY
        ================================================== -->
                <table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                    <td class="w580" width="580">
                        <p align="left" class="article-title">
                            <h3>Dear {{$name}},</h3>
                        </p>
                        <div align="left" class="article-content">
                            <p class="lead">Congratulations on taking the first step toward a better life with Florida Education Institute! </p>
                            <p class="lead">If you are already working with a Career Education Advisor, they will be in touch with you regarding additional information that may be required to get started. If you do not have an assigned admission counselor, please call us at (305) 748-2865.</p>
                            <p class="lead"> Again, congratulations on your decision to further your education!</p>
                            <p style="margin:0em 0em 1em 0em">
                                Sincerely, <br/>
                                <strong>Florida Education Institute,</strong><br/>
                                5818 SW 8th Street,<br/>
                                Miami, FL 33144 <br/>
                                admissions@fei.edu
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="w580" width="580" height="10">
                    </td>
                </tr>
                </tbody>
                </table>
            </td>
            <td class="w30" width="30">
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td class="w640" width="640" height="15" bgcolor="#ffffff">
    </td>
</tr>

<!-- Include the footer -->
@include('emails.email-footer')