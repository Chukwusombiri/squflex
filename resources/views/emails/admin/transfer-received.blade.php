<x-mail::message>
# Funds Received - Credited to Your Portfolio Balance

We are pleased to inform you that you have received __${{$data['amount']}}__ transferred to you by another member of our platform, __{{$data['sender']}}__. These funds have been successfully credited to your portfolio balance and are now ready for withdrawal.

To review your transfer history, please navigate to the funds transfer page upon logging into your portfolio.

Thanks,<br>
The {{ config('app.name') }} Team
</x-mail::message>
