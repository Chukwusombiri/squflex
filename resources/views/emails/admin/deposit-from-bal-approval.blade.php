<x-mail::message>
# Deposit Approved – Trading Session Started

We are pleased to confirm that your request to fund a deposit from your portfolio balance has been successfully
approved. As a result, a new trading session has commenced under your selected investment plan, and your portfolio
is now actively generating returns.

## Deposit Summary

- **Deposit Amount:** {{ '$' . number_format($deposit->amount) }}
- **Investment Plan:** {{ $deposit->plan }}
- **Start Date:** {{ $deposit->updated_at->format('Y-m-d') }}

If you have any questions or require further assistance, feel free to reach out to us at
{{ config('mail.from.address') }}. Our support team is always here to help.

Thank you for investing with us — we look forward to contributing to your continued financial growth.

Warm regards,

{{ config('app.name') }}
</x-mail::message>
