<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Review;
use Illuminate\Http\Request;

class GuestPagesController extends Controller
{
    public function index()
    {
        $reviews = Review::select('client', 'comment', 'occupation','photo_path')
            ->inRandomOrder()
            ->take(3)
            ->get();

        if ($reviews->isEmpty()) {
            $reviews = collect([
                [
                    'client' => 'David Thompson',
                    'comment' => 'Investing with ' . config('app.name') . ' has been a game-changer for me. Their team has expertly diversified my portfolio across forex, crypto, stocks, and real estate, ensuring steady and consistent returns. I no longer have to stress about market fluctuations because I know my investments are in safe hands. Highly recommend!',
                    'occupation' => 'Entrepreneur',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/50.jpg'
                ],
                [
                    'client' => 'Olivia Martinez',
                    'comment' => 'I was initially skeptical about handing over my investments, but ' . config('app.name') . ' has exceeded my expectations. Their strategic asset allocation and risk management have provided me with impressive returns month after month. The transparency and professionalism of their team give me complete confidence in my financial future.',
                    'occupation' => 'Financial Analyst',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/51.jpg'
                ],
                [
                    'client' => 'James Carter',
                    'comment' => 'Before joining ' . config('app.name') . ', I struggled with managing my investments effectively. Now, I simply deposit my capital, and their expert team takes care of the rest. My portfolio is well-diversified, and I\'ve seen remarkable growth over time. The consistent profits speak for themselves!',
                    'occupation' => 'Software Engineer',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/52.jpg'
                ]
            ])->map(function ($item) {
                return (object) $item;
            });
        }

        return view('guest.index')->with('reviews', $reviews);
    }

    public function managedInvesting()
    {
        $plans = Plan::all();
        return view('guest.managedInvesting')->with('plans', $plans);
    }

    public function pricing()
    {
        $plans = Plan::all();
        $reviews = Review::select('client', 'comment', 'occupation','photo_path')
            ->inRandomOrder()
            ->take(7)
            ->get();

        if ($reviews->isEmpty()) {
            $reviews = collect([
                [
                    'client' => 'Michael Johnson',
                    'comment' => 'I never imagined investing could be this stress-free! ' . config('app.name') . ' has provided me with a well-diversified portfolio, and my returns have been steady. I highly recommend their services to anyone looking for financial growth.',
                    'occupation' => 'Marketing Consultant',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/73.jpg'
                ],
                [
                    'client' => 'Sophia Williams',
                    'comment' => 'Thanks to ' . config('app.name') . ', I now have a solid investment portfolio. Their expertise in forex, crypto, stocks, and real estate has brought me consistent returns. I appreciate their transparency and professionalism!',
                    'occupation' => 'Accountant',
                    'photoUrl' => 'https://randomuser.me/api/portraits/women/73.jpg'
                ],
                [
                    'client' => 'Daniel Roberts',
                    'comment' => 'I was hesitant about investing, but ' . config('app.name') . ' made the process so easy. Their risk management strategies and market insights have given me confidence in my financial future. A fantastic experience!',
                    'occupation' => 'IT Consultant',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/74.jpg'
                ],
                [
                    'client' => 'Emily Thompson',
                    'comment' => 'The team at ' . config('app.name') . ' has exceeded my expectations. They have carefully allocated my investments, ensuring consistent growth. I no longer worry about market fluctuations because I trust their strategy!',
                    'occupation' => 'Real Estate Agent',
                    'photoUrl' => 'https://randomuser.me/api/portraits/women/74.jpg'
                ],
                [
                    'client' => 'Christopher Evans',
                    'comment' => 'The returns I’ve received from ' . config('app.name') . ' have been phenomenal! Their diversification strategy has ensured my portfolio remains profitable in all market conditions. I couldn’t be happier with my decision to invest with them.',
                    'occupation' => 'Business Owner',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/75.jpg'
                ],
                [
                    'client' => 'Jessica Brown',
                    'comment' => 'I’ve tried multiple investment platforms, but none compare to ' . config('app.name') . '. Their strategic planning and excellent customer support make all the difference. My portfolio is thriving, and I am grateful for their expertise!',
                    'occupation' => 'Banking Professional',
                    'photoUrl' => 'https://randomuser.me/api/portraits/women/75.jpg'
                ],
                [
                    'client' => 'Ryan Scott',
                    'comment' => 'Investing with ' . config('app.name') . ' has been a rewarding journey. The team is highly knowledgeable, and their diversification approach has given me financial security. I recommend them to anyone serious about investing!',
                    'occupation' => 'Software Developer',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/76.jpg'
                ]
            ])->map(function ($item) {
                return (object) $item;
            });
        }
        return view('guest.pricing')->with(['plans' => $plans, 'reviews' => $reviews]);
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function reviews()
    {
        return view('guest.reviews');
    }

    public function knowledgeBase()
    {
        return view('guest.knowledge_base');
    }

    public function blog()
    {
        return view('guest.blog');
    }

    public function certificate()
    {
        $filePath = 'company/binarypro.pdf';
        $fullPath = storage_path('app/public/' . $filePath);

        if (!file_exists($fullPath)) {
            abort(404, 'File not found.');
        }

        $name = config('app.name') . ' CERTIFICATE OF INCORPORATION.pdf';

        return response()->download($fullPath, $name, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $name . '"',
        ]);
    }
}
