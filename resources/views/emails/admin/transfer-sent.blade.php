<x-mail::message>
# Funds Transfer Confirmation

We are pleased to confirm that your recent __${{$data['amount']}}__ transfer to __{{$data['receiver']}}__ was successful. The transferred amount has been credited to the recipient's portfolio balance and is now available for withdrawal.

Thank you for using {{config('app.name')}} for your transaction. Do not hesitate to contact us if you didn't initiate such transaction.

Thanks,<br>
The {{ config('app.name') }} Team
</x-mail::message>
