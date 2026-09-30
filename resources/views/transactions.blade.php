<x-layout>
    @if(empty($transactions))
        Theres no transactions made
    @else
        <h1>Withdraw</h1>
        @foreach($transactions->get('withdraw', []) as $batchId => $batch)
            @foreach($batch as $transaction)
                {{$transaction->book->name}} - {{ $transaction->amount }},
                @if($loop->last)
                    Done at {{ $transaction->created_at }}
                @endif
            @endforeach
            <br>
        @endforeach
        <h1>Sent back</h1>
        @foreach($transactions->get('sent_back', []) as $batchId =>$batch)
            @foreach($batch as $transaction)
                {{$transaction->book->name}} - {{ $transaction->amount }},
                @if($loop->last)
                    Done at {{ $transaction->created_at }}
                @endif
            @endforeach
        @endforeach
    @endif
</x-layout>