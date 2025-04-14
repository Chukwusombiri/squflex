@props(['url'])
@php
 $path = public_path('images/app-logo.png')   
@endphp
<tr>
    <td class="header">
        <a href="{{ $url }}"
            style="display: inline-flex; flex-direction: column; align-items: center; gap: 0; font-family: 'Hedvig Letters Serif', serif;">
            @if (file_exists($path))
                <img src="{{asset('images/app-logo.png')}}" alt="App Logo" height="50px">
            @else
                <span
                    style="line-height: 1; color: #f9fafb; text-transform: uppercase; font-weight: 800; font-size: 1.125rem; letter-spacing: 6px; margin-bottom: 0; padding-bottom: 0;">
                    FIDELIS
                </span>
                <div
                    style="margin-top: 0; padding-top: 4px; width: 100%; display: inline-flex; gap: 4px; align-items: center;">
                    <span
                        style="width: 1.4rem; height: 4px;border-radius:2px; background-color: #4f46e5; line-height: 1;"></span>
                    <span
                        style="font-size: 10px; font-weight: 600; color: #f9fafb; text-transform: uppercase; line-height: 1;">
                        capital corp
                    </span>
                    <span
                        style="width: 1.4rem; height: 4px;border-radius:2px; background-color: #4f46e5; line-height: 1;"></span>
                </div>
            @endif
        </a>

    </td>
</tr>
