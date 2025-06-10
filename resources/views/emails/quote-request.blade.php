<!DOCTYPE html>
<html>

<head>
    <title>New Quote Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #007bff;
        }

        .content {
            padding: 20px;
        }

        .info-row {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #495057;
        }

        .value {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>New Quote Request</h2>
            <p>BU Pixel Future Sdn Bhd</p>
        </div>

        <div class="content">
            <h3>Quote Request Details</h3>

            <div class="info-row">
                <span class="label">Company Name:</span>
                <span class="value">{{ $data['company_name'] }}</span>
            </div>

            <div class="info-row">
                <span class="label">Contact Person:</span>
                <span class="value">{{ $data['contact_person'] }}</span>
            </div>

            <div class="info-row">
                <span class="label">Email:</span>
                <span class="value">{{ $data['email'] }}</span>
            </div>

            <div class="info-row">
                <span class="label">Phone:</span>
                <span class="value">{{ $data['phone'] }}</span>
            </div>

            <div class="info-row">
                <span class="label">Service Type:</span>
                <span class="value">{{ ucfirst($data['service_type']) }}</span>
            </div>

            @if($data['project_details'])
            <div class="info-row">
                <span class="label">Project Details:</span>
                <div style="margin-top: 10px; padding: 15px; background: #f8f9fa; border-left: 4px solid #007bff;">
                    {{ $data['project_details'] }}
                </div>
            </div>
            @endif

            <hr style="margin: 30px 0;">

            <p><small>This quote request was submitted on {{ date('d M Y, H:i') }} via the BU Pixel Future
                    website.</small></p>
        </div>
    </div>
</body>

</html>
