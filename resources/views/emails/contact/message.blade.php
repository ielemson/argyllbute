<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>New Contact Enquiry</title>
</head>

<body style="margin:0;padding:0;background:#f4f4f4;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">

    <!-- Preheader (hidden preview text) -->
    <div
        style="display:none;font-size:1px;color:#fefefe;line-height:1px;font-family:Arial,Helvetica,sans-serif;max-height:0;max-width:0;opacity:0;overflow:hidden;">
        You have received a new contact enquiry from your website.
    </div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
        style="border-collapse:collapse;background:#f4f4f4;">
        <!-- Top brand bar -->
        <tr>
            <td align="center" style="padding:0;background:#006b59;">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0"
                    style="border-collapse:collapse;max-width:600px;width:100%;">
                    <tr>
                        <td
                            style="padding:18px 20px;color:#ffffff;font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:700;">
                            {{ config('app.name') }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Main container -->
        <tr>
            <td align="center" style="padding:0 12px;">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0"
                    style="border-collapse:collapse;max-width:600px;width:100%;">
                    <!-- Card -->
                    <tr>
                        <td style="padding:18px 0 0 0;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="border-collapse:collapse;background:#ffffff;border-radius:10px;overflow:hidden;">
                                <!-- Header inside card -->
                                <tr>
                                    <td style="padding:26px 26px 10px 26px;font-family:Arial,Helvetica,sans-serif;">
                                        <div
                                            style="font-size:26px;line-height:32px;font-weight:700;color:#111111;margin:0;">
                                            New Contact Enquiry
                                        </div>
                                        <div style="font-size:14px;line-height:20px;color:#6b7280;margin-top:6px;">
                                            A visitor submitted your website contact form.
                                        </div>
                                    </td>
                                </tr>

                                <!-- Body copy -->
                                <tr>
                                    <td
                                        style="padding:10px 26px 0 26px;font-family:Arial,Helvetica,sans-serif;font-size:15px;line-height:22px;color:#374151;">
                                        Below are the details submitted:
                                    </td>
                                </tr>

                                <!-- Divider -->
                                <tr>
                                    <td style="padding:14px 26px 0 26px;">
                                        <div style="height:1px;background:#e5e7eb;line-height:1px;font-size:1px;">&nbsp;
                                        </div>
                                    </td>
                                </tr>

                                <!-- Details (Bootstrap-like rows using table) -->
                                <tr>
                                    <td style="padding:14px 26px 6px 26px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                            border="0" style="border-collapse:collapse;">
                                            <tr>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#6b7280;width:120px;vertical-align:top;">
                                                    Name
                                                </td>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:15px;color:#111111;vertical-align:top;">
                                                    {{ $data['name'] ?? 'N/A' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#6b7280;vertical-align:top;">
                                                    Email
                                                </td>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:15px;color:#111111;vertical-align:top;">
                                                    {{ $data['email'] ?? 'N/A' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#6b7280;vertical-align:top;">
                                                    Phone
                                                </td>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:15px;color:#111111;vertical-align:top;">
                                                    {{ $data['phone'] ?? 'Not provided' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#6b7280;vertical-align:top;">
                                                    Subject
                                                </td>
                                                <td
                                                    style="padding:8px 0;font-family:Arial,Helvetica,sans-serif;font-size:15px;color:#111111;vertical-align:top;">
                                                    {{ $data['subject'] ?? 'No subject' }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Message block -->
                                <tr>
                                    <td style="padding:10px 26px 0 26px;">
                                        <div
                                            style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#6b7280;margin:0 0 8px 0;">
                                            Message
                                        </div>
                                        <div
                                            style="font-family:Arial,Helvetica,sans-serif;font-size:15px;line-height:22px;color:#111111;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:14px;white-space:pre-wrap;">
                                            {{ $data['message_body'] ?? 'No message provided' }}
                                        </div>
                                    </td>
                                </tr>

                                <!-- CTA Button -->
                                <tr>
                                    <td align="center" style="padding:18px 26px 8px 26px;">
                                        @php
                                            $replyEmail = $data['email'] ?? '';
                                            $replyUrl = $replyEmail ? 'mailto:' . $replyEmail : config('app.url');
                                        @endphp

                                        <a href="{{ $replyUrl }}"
                                            style="display:inline-block;background:#006b59;color:#ffffff;text-decoration:none;font-family:Arial,Helvetica,sans-serif;font-size:15px;font-weight:700;line-height:20px;padding:12px 18px;border-radius:8px;border:1px solid #006b59;">
                                            Reply to Sender
                                        </a>
                                    </td>
                                </tr>

                                <!-- Fallback link -->
                                <tr>
                                    <td
                                        style="padding:8px 26px 18px 26px;font-family:Arial,Helvetica,sans-serif;font-size:13px;line-height:19px;color:#6b7280;">
                                        If the button does not work, copy and paste this into your mail client:
                                        <div style="margin-top:6px;color:#111111;font-weight:700;">
                                            {{ $data['email'] ?? 'N/A' }}
                                        </div>
                                    </td>
                                </tr>

                                <!-- Signature -->
                                <tr>
                                    <td
                                        style="padding:0 26px 22px 26px;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;color:#374151;">
                                        Regards,<br />
                                        <span style="font-weight:700;color:#111111;">{{ config('app.name') }}</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Support card -->
                    <tr>
                        <td style="padding:14px 0 0 0;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="border-collapse:collapse;background:#fff7ed;border:1px solid #fed7aa;border-radius:10px;">
                                <tr>
                                    <td style="padding:16px 18px;font-family:Arial,Helvetica,sans-serif;">
                                        <div
                                            style="font-size:16px;line-height:22px;font-weight:700;color:#111111;margin:0 0 4px 0;">
                                            Need more help?
                                        </div>
                                        <div style="font-size:13px;line-height:19px;color:#6b7280;">
                                            You are receiving this email because a visitor submitted your contact form.
                                            If you need technical assistance, contact your system administrator.
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td
                            style="padding:18px 6px 26px 6px;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#6b7280;text-align:center;">
                            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>

</html>
