<x-mail::message>
# Funds Transfer Request Rejection

We regret to inform you that your recent __${{$data['amount']}}__ transfer request to __{{$data['receiver']}}__ has been rejected by our portfolio management team.

Please review your transaction details or contact our support team for further assistance.

Thank you for your understanding.

Best regards,<br>
{{ config('app.name') }}
</x-mail::message>
