<?php

namespace App\Http\Controllers;

use App\Actions\Leads\Create;
use App\Enums\LeadStatus;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LeadController extends Controller
{
    public function index(LeadStatus $status)
    {
        $sites = Auth::user()->sites;

        $sitesWithLeads = $sites->load(['leads' => function ($query) use ($status) {
            $query->where('status', $status);
        }]);

        $leads = $sitesWithLeads->pluck('leads')->flatten();

        $leadStatuses = array_column(LeadStatus::cases(), 'value');

        return Inertia::render('Leads/Overview', [
            'leads' => $leads,
            'leadStatuses' => $leadStatuses,
        ]);
    }

    public function store(StoreLeadRequest $request, Create $createLeadAction)
    {
        $validated = $request->validated();

        $site = $request->site;

        $lead = $createLeadAction->execute($validated);

        $site->leads()->attach($lead);

        return $lead;
    }

    public function update(UpdateLeadRequest $request, Lead $lead): RedirectResponse
    {
        $validated = $request->validated();

        $lead->changeStatus($validated['status'] ?? null, $validated['conversion_value'] ?? null);

        return Redirect::route('leads.index', $lead->status);
    }
}
