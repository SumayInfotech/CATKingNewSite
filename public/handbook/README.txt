================================================================================
CAT HANDBOOK — UPLOAD FOLDER
================================================================================

Drop the CAT Handbook PDF here BEFORE deploying.

Expected file:
  cat-handbook.pdf

================================================================================
HOW THE DELIVERY FLOW WORKS
================================================================================

The CAT Handbook tile in the "Free CAT Resources" section is gated by
a lead-capture modal:

  1. User clicks "Get the Handbook ->"
  2. Lead-gate modal opens asking for Name / Email / WhatsApp / Stage
  3. On submit:
     - Lead is stored in sessionStorage as catking_pdf_lead
       (sample shape: {name, email, phone, stage, timestamp})
     - The browser auto-downloads handbook/cat-handbook.pdf, saved with
       the friendly filename "CAT-Handbook-2026.pdf"
  4. Subsequent clicks in the same browser session skip the modal and
     deliver the PDF directly (lead already captured)

================================================================================
WIRING THE LEAD CAPTURE TO YOUR CRM
================================================================================

The submit handler currently only stores the lead in sessionStorage.
To forward it to your CRM (HubSpot, Salesforce, custom /api/leads, etc),
edit the TODO block inside CATKing_CAT_Landing.html — search for:

  // TODO (production): POST to backend
  // fetch('/api/leads', ...)

Uncomment and point at your endpoint. The lead object is already
assembled with: name, email, phone, stage, kind ('handbook'), and
pdf URL.

================================================================================
FILE NAMING
================================================================================

- Use exactly: cat-handbook.pdf
- Lower-case, hyphen-separated, no spaces
- Recommended size: under 25 MB for snappy mobile downloads

================================================================================
ALTERNATIVE — HOST THE PDF EXTERNALLY
================================================================================

If you'd rather host the PDF on your CDN or main catking.in domain, edit
the CAT Handbook card in CATKing_CAT_Landing.html and replace:

  data-pdf-url="handbook/cat-handbook.pdf"

with an absolute URL, for example:

  data-pdf-url="https://catking.in/downloads/cat-handbook.pdf"

When the URL is absolute (starts with http:// or https://), the lead-gate
JS falls back to window.open(...) — the user gets the PDF in a new tab.
The browser cannot force "Save As" on cross-origin URLs without the
server sending a Content-Disposition: attachment header.

================================================================================
