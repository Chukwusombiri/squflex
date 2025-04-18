<x-mail::message>
# Trading Session Completed

Hello, 

Dear esteeemed investor, we are delighted to notify that your just concluded trading sesion was a fruitful one. You can proceed to make a withdrawal or re-invest into another plan from your portfolio balance.

## The details of trading sessions:

- **New Portfolio balance (R.O.I): ** {{ $roi }}
- **Total Profit generated this month:** {{ $perMonRoi }}
- **Date:** {{ $date }}

If you have any questions or require further assistance, feel free to reach out to us at
{{ config('mail.from.address') }}.

Thank you for choosing us — we look forward to contributing to your continued financial growth.

Warm regards,

{{ config('app.name') }}
</x-mail::message>
