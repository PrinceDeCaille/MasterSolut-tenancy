<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    /* Fonction pour créer un nouveau tenant
    public function createTenant(Request $request)
    {
        // Valider les données d'entrée
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain' => 'required|string|unique:domains',
            'database' => 'required|string|unique:tenants',
        ]);

        // Créer un nouveau tenant
        $tenant = Tenant::create([
            'id' => $validated['name'],
            'tenancy_db_name' => $validated['database'],
        ]);

        // Ajouter un domaine pour le tenant
        $tenant->domains()->create([
            'domain' => $validated['domain'],
        ]);

        return response()->json([
            'message' => 'Tenant created successfully!',
            'tenant' => $tenant,
        ]);
    }
*/
}
