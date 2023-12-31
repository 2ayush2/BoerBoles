<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{!! env('APP_NAME') !!}</title>
</head>

<body>
    <div style="background: #85B840 ; width: 700px; padding: 50px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
        <div style="width: 90%; background: #fff; margin: auto; padding: 25px; text-align: left;">
            <a href="{{ url('/') }}" target="_blank"><img style="width:400px; height:160px; margin: auto;margin-left: 120px;" src="{{ asset('assets/img/Concept 2.svg') }}" /></a>
            <div style="text-align: left; margin-top: 50px;">
                <div style="font-weight: bold;">Dear Admin,</div>
                <p>New enquiry detail is as follows.</p>

                <div style="margin-bottom: 12px; margin-top: 35px;"><span style="font-weight: bold;">Name</span>&nbsp;:&nbsp;{{ $contact->full_name }}</div>
                <div style="margin-bottom: 12px;"><span style="font-weight: bold;">Phone No.</span>&nbsp;:&nbsp;{{ $contact->phoneno }}</div>
                <div style="margin-bottom: 12px;"><span style="font-weight: bold;">Email</span>&nbsp;:&nbsp;{{ $contact->email }}</div>
                <div style="margin-bottom: 12px;"><span style="font-weight: bold;">Subject</span>&nbsp;:&nbsp;{{ $contact->subject }}</div>
                <div style="margin-bottom: 12px; margin-bottom: 35px; line-height: 22px;"><span style="font-weight: bold;">Message</span>&nbsp;:&nbsp;{{ $contact->message }}</div>


                <div style="font-size: 12px; margin-top: 15px;"><span style="color: #DE0F19;">NOTE</span>&nbsp;:&nbsp;THIS MESSAGE IS SYSTEM GENERATED. PLEASE DO NO REPLY TO THIS MESSAGE.</div>
            </div>
        </div>
    </div>
</body>

</html>