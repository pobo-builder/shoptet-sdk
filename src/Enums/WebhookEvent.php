<?php

declare(strict_types=1);

namespace Pobo\ShoptetSdk\Enums;

use Kuria\Enum\Enum;

/**
 * Class WebhookEvent
 */
abstract class WebhookEvent extends Enum
{
    public const CREDIT_NOTE_CREATE = 'creditNote:create';
    public const CREDIT_NOTE_UPDATE = 'creditNote:update';
    public const CREDIT_NOTE_DELETE = 'creditNote:delete';

    public const CUSTOMER_CREATE = 'customer:create';
    public const CUSTOMER_IMPORT = 'customer:import';

    public const DELIVERY_NOTE_CREATE = 'deliverNote:create';
    public const DELIVERY_NOTE_UPDATE = 'deliveryNote:update';
    public const DELIVERY_NOTE_DELETE = 'deliveryNote:delete';

    public const INVOICE_CREATE = 'invoice:create';
    public const INVOICE_UPDATE = 'invoice:update';
    public const INVOICE_DELETE = 'invoice:delete';

    public const MAILING_LIST_EMAIL_CREATE = 'mailingListEmail:create';
    public const MAILING_LIST_EMAIL_DELETE = 'mailingListEmail:delete';

    public const ORDER_CREATE = 'order:create';
    public const ORDER_UPDATE = 'order:update';
    public const ORDER_DELETE = 'order:delete';

    public const PROFORMA_INVOICE_CREATE = 'proformaInvoice:create';
    public const PROFORMA_INVOICE_UPDATE = 'proformaInvoice:update';
    public const PROFORMA_INVOICE_DELETE = 'proformaInvoice:delete';

    public const STOCK_MOVEMENT = 'stock:movement';
}
