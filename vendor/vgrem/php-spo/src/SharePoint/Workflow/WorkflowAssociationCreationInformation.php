<?php

/**
 * Generated 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Workflow;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * properties for a new workflow association.
 */
class WorkflowAssociationCreationInformation extends ClientValue
{
    /**
     * Specifies 
     * the name of the workflow history list 
     * to be used by a site content typeworkflow 
     * association.Its value 
     * MUST NOT be NULL and MUST NOT be empty if the workflow are to be 
     * created with a site content type workflow template 
     * and the value of HistoryList is NULL. Its value MUST be ignored for any 
     * other type of workflow template.
     * @var string
     */
    public $ContentTypeAssociationHistoryListName;
    /**
     * Specifies 
     * the name of the workflow task list 
     * to be used by a site content typeworkflow 
     * association.Its value 
     * MUST NOT be NULL and MUST NOT be empty if the workflow are to be 
     * created with a site content type workflow template 
     * and the value of TaskList is NULL. Its value MUST be ignored for any 
     * other type of workflow template.
     * @var string
     */
    public $ContentTypeAssociationTaskListName;
    /**
     * Specifies 
     * the name of the workflow history list 
     * to be used by a site content typeworkflow 
     * association.Its value 
     * MUST NOT be NULL and MUST NOT be empty if the workflow are to be 
     * created with a site content type workflow template 
     * and the value of HistoryList is NULL. Its value MUST be ignored for any 
     * other type of workflow template.
     * @var string
     */
    public $Name;
}