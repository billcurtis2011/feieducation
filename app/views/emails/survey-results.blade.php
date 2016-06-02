
<!DOCTYPE html>
<html>
<head>
<title>FEI Survey Response</title>

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
                            <h3>Congratulations {{$name}}!</h3>
                        </p>
                        <div align="left" class="article-content">
                            <p class="lead">You've finished a very important first step on your path to finding a new career. Here's your personal education readiness report.</p>
                            <a href="{{url('/survey-results/'.$hash)}}" class="maincta" style="padding: 10px 0; background-color: #F1D669; color: #333; max-width:300px; width: 100%; margin-left: auto; margin-right: auto; display: block; text-align: center; text-transform: uppercase;">Review your Results</a>

                            <p class="lead">Please follow the above link to view your Your Education Readiness Report. Sincerely,</p>
                            <p style="margin:0em 0em 1em 0em">
                                <strong>FEI Support</strong>
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