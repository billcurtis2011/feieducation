<!DOCTYPE html>
<html>
<head>
<title>FEI Site Lead</title>

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
                            <h3>Hi Admin!</h3>
                        </p>
                        <div align="left" class="article-content">
                            <p class="lead">A new prospect submitted a contact form in the FEI.edu website. Here is all the information provided.</p>

                            <table border="1" cellpadding="10" class="w580" width="580">
                                <thead bgcolor="#fbfbfb">
                                    <tr>
                                        <th><strong>Name</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Phone</strong></th>
                                        <th><strong>Message</strong></th>
                                        <th><strong>Source</strong></th>
                                        <th><strong>Form</strong></th>
                                        <th><strong>Language Preference</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$name}}</td>
                                        <td>{{$email}}</td>
                                        <td>{{$phone}}</td>
                                        <td>{{isset($message_contact)?$message_contact:''}}</td>
                                        <td>{{$source}}</td>
                                        <td>{{$form_label}}</td>
                                         <td>{{(isset($preferred_language)) ? $preferred_language : 'English'}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table>
                                <tr>
                                    <td class="w640" width="640" height="15" bgcolor="#ffffff">
                                    </td>
                                </tr>
                            </table>
                            @if(isset($answers))
                            <table border="1" cellpadding="10" class="w580" width="580">
                                <thead bgcolor="#fbfbfb">
                                    <tr>
                                        <th><strong>Question</strong></th>
                                        <th><strong>Answer</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($answers as $answer)
                                    <tr>
                                        <td>{{$answer->question}}</td>
                                        <td>
                                            <?php
                                            $myAnswer = json_decode($answer->answer);

                                            if(is_array($myAnswer)) {
                                                echo implode(', ', $myAnswer);
                                            }else {
                                                echo $answer->answer;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
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