<?php

namespace Tests\Feature;

use App\Livewire\TripSearch;
use Livewire\Livewire;
use Tests\TestCase;

class TripSearchTest extends TestCase
{
    public function test_homepage_displays_the_starter_page(): void
    {
        $this->withoutVite()->get('/')
            ->assertOk()
            ->assertSee('A little more joy in')
            ->assertSee('wire:submit="search"', false)
            ->assertSee('Vehicle listings coming soon');
    }

    public function test_date_search_validates_and_confirms_dates(): void
    {
        Livewire::test(TripSearch::class)
            ->call('search')->assertHasErrors(['pickup' => 'required', 'return' => 'required'])
            ->set('pickup', now()->addDays(2)->toDateString())
            ->set('return', now()->addDay()->toDateString())
            ->call('search')->assertHasErrors(['return' => 'after_or_equal'])
            ->set('return', now()->addDays(3)->toDateString())
            ->call('search')->assertHasNoErrors()
            ->assertSee('Vehicle availability and booking are coming soon.');
    }
}
