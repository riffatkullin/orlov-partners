<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новая заявка</title>
</head>

<body style="margin: 0; padding: 40px; background: #f4f1eb; color: #1d1d1b; font-family: Arial, sans-serif;">

    <div style="max-width: 700px; margin: 0 auto; background: #ffffff; padding: 40px;">

        <div style="margin-bottom: 35px; padding-bottom: 20px; border-bottom: 1px solid #ddd8cf;">
            <div style="font-size: 13px; font-weight: bold; letter-spacing: 2px;">
                ORLOV & PARTNERS
            </div>

            <h1 style="margin: 25px 0 0; font-size: 32px; font-weight: normal;">
                Новая заявка с сайта
            </h1>
        </div>

        <div style="margin-bottom: 25px;">
            <div style="margin-bottom: 8px; color: #777; font-size: 11px; text-transform: uppercase; letter-spacing: 1px;">
                Имя
            </div>

            <div style="font-size: 16px;">
                {{ $consultationRequest->name }}
            </div>
        </div>

        <div style="margin-bottom: 25px;">
            <div style="margin-bottom: 8px; color: #777; font-size: 11px; text-transform: uppercase; letter-spacing: 1px;">
                Контакт
            </div>

            <div style="font-size: 16px;">
                {{ $consultationRequest->contact }}
            </div>
        </div>

        <div style="margin-bottom: 25px;">
            <div style="margin-bottom: 8px; color: #777; font-size: 11px; text-transform: uppercase; letter-spacing: 1px;">
                Задача
            </div>

            <div style="font-size: 16px; line-height: 1.7; white-space: pre-line;">
                {{ $consultationRequest->message }}
            </div>
        </div>

        <div style="padding-top: 20px; border-top: 1px solid #ddd8cf; color: #777; font-size: 12px;">
            Заявка №{{ $consultationRequest->id }}
        </div>

    </div>

</body>
</html>