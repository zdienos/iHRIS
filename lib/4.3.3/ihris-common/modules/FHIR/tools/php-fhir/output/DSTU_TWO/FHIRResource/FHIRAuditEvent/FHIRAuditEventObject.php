<?php namespace DSTU_TWO\FHIRResource\FHIRAuditEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 13th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DSTU_TWO\FHIRElement\FHIRBackboneElement;
use DSTU_TWO\JsonSerializable;

/**
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 */
class FHIRAuditEventObject extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @var \DSTU_TWO\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @var \DSTU_TWO\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * The type of the object that was involved in this audit event.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public $role = null;

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public $lifecycle = null;

    /**
     * Denotes security labels for the identified object.
     * @var \DSTU_TWO\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = array();

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Text that describes the object in more detail.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The actual query for a query-type participant object.
     * @var \DSTU_TWO\FHIRElement\FHIRBase64Binary
     */
    public $query = null;

    /**
     * Additional Information about the Object.
     * @var \DSTU_TWO\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[]
     */
    public $detail = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'AuditEvent.Object';

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @return \DSTU_TWO\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @param \DSTU_TWO\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @return \DSTU_TWO\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @param \DSTU_TWO\FHIRElement\FHIRReference $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * The type of the object that was involved in this audit event.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the object that was involved in this audit event.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding $lifecycle
     * @return $this
     */
    public function setLifecycle($lifecycle)
    {
        $this->lifecycle = $lifecycle;
        return $this;
    }

    /**
     * Denotes security labels for the identified object.
     * @return \DSTU_TWO\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Denotes security labels for the identified object.
     * @param \DSTU_TWO\FHIRElement\FHIRCoding[] $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @param \DSTU_TWO\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Text that describes the object in more detail.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Text that describes the object in more detail.
     * @param \DSTU_TWO\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The actual query for a query-type participant object.
     * @return \DSTU_TWO\FHIRElement\FHIRBase64Binary
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The actual query for a query-type participant object.
     * @param \DSTU_TWO\FHIRElement\FHIRBase64Binary $query
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Additional Information about the Object.
     * @return \DSTU_TWO\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Additional Information about the Object.
     * @param \DSTU_TWO\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[] $detail
     * @return $this
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->reference) $json['reference'] = $this->reference->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->role) $json['role'] = $this->role->jsonSerialize();
        if (null !== $this->lifecycle) $json['lifecycle'] = $this->lifecycle->jsonSerialize();
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = array();
            foreach($this->securityLabel as $securityLabel) {
                $json['securityLabel'][] = $securityLabel->jsonSerialize();
            }
        }
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (null !== $this->query) $json['query'] = $this->query->jsonSerialize();
        if (0 < count($this->detail)) {
            $json['detail'] = array();
            foreach($this->detail as $detail) {
                $json['detail'][] = $detail->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AuditEventObject xmlns="http://hl7.org/fhir"></AuditEventObject>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->reference) $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->role) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (null !== $this->lifecycle) $this->lifecycle->xmlSerialize(true, $sxe->addChild('lifecycle'));
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->query) $this->query->xmlSerialize(true, $sxe->addChild('query'));
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}