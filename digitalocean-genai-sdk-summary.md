# DigitalOcean GenAI Laravel SDK Extension (Entity-Based)

## ✅ Supported Resources & Endpoints

---

### 🧠 Agents (`Agent.php` / `AgentEntity.php`)
- `GET    /v2/gen-ai/agents` → `all(): Agent[]`
- `POST   /v2/gen-ai/agents` → `create(array): Agent`
- `GET    /v2/gen-ai/agents/{uuid}` → `retrieve(string): Agent`
- `PUT    /v2/gen-ai/agents/{uuid}` → `update(string, array): Agent`
- `DELETE /v2/gen-ai/agents/{uuid}` → `destroy(string): void`

---

### 🔗 Agent Relationships (`AgentRelationship.php`)
- `GET    /v2/gen-ai/agents/{uuid}/child_agents` → `list(string): Agent[]`
- `POST   /v2/gen-ai/agents/{parent}/child_agents/{child}` → `attach(parent, child): Agent`
- `DELETE /v2/gen-ai/agents/{parent}/child_agents/{child}` → `detach(parent, child): void`

---

### 🔑 OpenAI Keys (`OpenAiKey.php` / `OpenAiKeyEntity.php`)
- `GET    /v2/gen-ai/openai/keys` → `all(): OpenAiKey[]`
- `POST   /v2/gen-ai/openai/keys` → `create(array): OpenAiKey`
- `GET    /v2/gen-ai/openai/keys/{uuid}` → `retrieve(string): OpenAiKey`
- `PUT    /v2/gen-ai/openai/keys/{uuid}` → `update(string, array): OpenAiKey`
- `DELETE /v2/gen-ai/openai/keys/{uuid}` → `destroy(string): void`
- `GET    /v2/gen-ai/openai/keys/{uuid}/agents` → `listAgents(string): Agent[]`

---

### 👤 Anthropic Keys (`AnthropicKey.php` / `AnthropicKeyEntity.php`)
- `GET    /v2/gen-ai/anthropic/keys` → `all(): AnthropicKey[]`
- `POST   /v2/gen-ai/anthropic/keys` → `create(array): AnthropicKey`
- `GET    /v2/gen-ai/anthropic/keys/{uuid}` → `retrieve(string): AnthropicKey`
- `PUT    /v2/gen-ai/anthropic/keys/{uuid}` → `update(string, array): AnthropicKey`
- `DELETE /v2/gen-ai/anthropic/keys/{uuid}` → `destroy(string): void`
- `GET    /v2/gen-ai/anthropic/keys/{uuid}/agents` → `listAgents(string): Agent[]`

---

### 📚 Knowledge Bases (`KnowledgeBase.php` / `KnowledgeBaseEntity.php`)
- `GET    /v2/gen-ai/knowledge_bases` → `all(): KnowledgeBase[]`
- `POST   /v2/gen-ai/knowledge_bases` → `create(array): KnowledgeBase`
- `GET    /v2/gen-ai/knowledge_bases/{uuid}` → `retrieve(string): KnowledgeBase`
- `DELETE /v2/gen-ai/knowledge_bases/{uuid}` → `destroy(string): void`

---

### 🔍 Indexing Jobs (`IndexingJob.php` / `IndexingJobEntity.php`)
- `GET    /v2/gen-ai/indexing_jobs` → `all(): IndexingJob[]`

---

## 🧩 Binding Summary (`Client.php`)

```php
$client->genAiAgent();
$client->genAiAgentRelationships();
$client->genAiOpenAiKeys();
$client->genAiAnthropicKeys();
$client->genAiKnowledgeBases();
$client->genAiIndexingJobs();
```

---

## 📦 Entities Implemented

- `Agent`
- `OpenAiKey`
- `AnthropicKey`
- `KnowledgeBase`
- `IndexingJob`

All extend `AbstractEntity` and use `setCreatedAt()`, `setUpdatedAt()`, etc. for normalization.