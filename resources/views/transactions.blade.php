<x-layout>
    <div class="transactions">
        <div class="transactions_big_box">
            <div class="transactions_title">
                <h1>Withdraw</h1>
            </div>
            <div class="transactions_box">
                <div class="transactions_box_inner">
                    @if(Empty($transactions->get('withdraw', [])))
                        <div>
                            <p class="bold_big">Theres no withdraws made</p>
                        </div>
                    @else
                        @foreach($transactions->get('withdraw', []) as $batchId => $batch)
                            <div class="transaction_box">
                                <div class="transaction_box_item">
                                    <p>
                                        @foreach($batch as $transaction)
                                            | {{$transaction->book->name}} - {{ $transaction->amount }} 
                                        @if($loop->last)
                                    </p>
                                </div>
                                <div class="transaction_box_item">
                                    <p>Done at {{ $transaction->created_at }} Timezone: Europe/Rīga</p>
                                </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    @endif
                </div>        
            </div>
        </div>
        <div class="transactions_big_box">
            <div class="transactions_title">
                <h1>Sent back</h1>
            </div>
            <div class="transactions_box">
                <div class="transactions_box_inner">
                    @if(Empty($transactions->get('sent_back', [])))
                        <div>
                            <p class="bold_big">Theres no sent backs made</p>
                        </div>
                    @else
                        @foreach($transactions->get('sent_back', []) as $batchId =>$batch)
                            <div class="transaction_box">
                                <div class="transaction_box_item">
                                    <p>
                                        @foreach($batch as $transaction)
                                            | {{$transaction->book->name}} - {{ $transaction->amount }} 
                                        @if($loop->last)
                                    </p>
                                </div>
                                <div class="transaction_box_item">
                                    <p>Done at {{ $transaction->created_at }} Timezone: Europe/Rīga</p>
                                </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    @endif
                </div>        
            </div>
        </div>
    </div>
</x-layout>